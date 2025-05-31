<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PMFCTEvents;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use Carbon\Carbon;
use App\Models\ActivitySuccess;
use App\Models\ActivityError;

class PMFCTEventsController extends Controller
{
    public function index(){

        $events = PMFCTEvents::all();

        if($events){
            return response([
                'message'=> 'Success',
                'events' => $events
            ]);
        } else{
            return response([
                'message'=> 'error',
                'events' => 'No Events in database',
            ]);
        }
    }

    public function store(Request $request) {

        try {
            $this->validate($request, [
                'aadhar_ref_id' => 'required',
                'aadhar' => 'required',
                'aadhar_eid' => 'required',
                'event_type_id' => 'required',
                'sub_event_type_id' => 'required',
                'event_transaction_id' => 'required',
                'event_transaction_date' => 'required',
                'agency_id' => 'required',
                'agency_name' => 'required',
                'rural_urban' => 'required',
                'district_code' => 'required',
                'sub_district_code' => 'required',
                'corp_muni_town' => 'required',
                'ward_village' => 'required',
                'event_date' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        }


        try{

            $events = PMFCTEvents::create([
                'aadhar_ref_id' => $request->aadhar_ref_id,
                'aadhar' => $request->aadhar,
                'aadhar_eid' => $request->aadhar_eid,
                'event_type_id' => $request->event_type_id,
                'sub_event_type_id' => $request->sub_event_type_id,
                'event_transaction_id' => $request->event_transaction_id,
                'event_transaction_date' => $request->event_transaction_date,
                'agency_id' => $request->agency_id,
                'agency_name' => $request->agency_name,
                'rural_urban' => $request->rural_urban,
                'district_code' => $request->district_code,
                'sub_district_code' => $request->sub_district_code,
                'corp_muni_town' => $request->corp_muni_town,
                'ward_village' => $request->ward_village,
                'event_date' => $request->event_date,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $events = PMFCTEvents::find($events->id);


            $this->transactions($events);

            // Log the activity
            ActivitySuccess::create([
                'activity_id' => 'PMFCT Event Added',
                'event_id' => $events->id,
                'ip_address' => $_SERVER['REMOTE_ADDR'],
                'remark' => "PMFCT Event Added successfully"
            ]);

            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'PMFCT Event Added successfully'],
            200);

        } catch (\Exception $e) {
            // echo "<pre>";   print_r($e->getMessage()); die;
            // Log the error
            ActivityError::create([
                'url' => url()->current(),
                'error_msg' => $e->getMessage()
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'Error while adding PMFCT Event.'],
            500);
        }
    }

    public function view(Request $request) {

        $request->validate([
            'id' => 'required',
        ]);

        $events = PMFCTEvents::find($request->id);

        if($events){
            return response([
                'message'=> 'success',
                'events' => $events,
                'status' => 200
            ]);
        } else{
            return response([
                'message' => 'error',
                'events' => 'Events does not exist',
                'status' => 404
            ]);
        }
    }

    public function update(Request $request) {

        try {
            $this->validate($request, [
                'aadhar_ref_id' => 'required',
                'aadhar' => 'required',
                'aadhar_eid' => 'required',
                'event_type_id' => 'required',
                'sub_event_type_id' => 'required',
                'event_transaction_id' => 'required',
                'event_transaction_date' => 'required',
                'agency_id' => 'required',
                'agency_name' => 'required',
                'rural_urban' => 'required',
                'district_code' => 'required',
                'sub_district_code' => 'required',
                'corp_muni_town' => 'required',
                'ward_village' => 'required',
                'event_date' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        }

        $events = PMFCTEvents::find($request->id);


        if($events){

            $events->aadhar_ref_id = $request->aadhar_ref_id;
            $events->aadhar = $request->aadhar;
            $events->aadhar_eid = $request->aadhar_eid;
            $events->event_type_id = $request->event_type_id;
            $events->sub_event_type_id = $request->sub_event_type_id;
            $events->event_transaction_id = $request->event_transaction_id;
            $events->event_transaction_date = $request->event_transaction_date;
            $events->agency_id = $request->agency_id;
            $events->agency_name = $request->agency_name;
            $events->rural_urban = $request->rural_urban;
            $events->district_code = $request->district_code;
            $events->sub_district_code = $request->sub_district_code;
            $events->corp_muni_town = $request->corp_muni_town;
            $events->ward_village = $request->ward_village;
            $events->event_date = $request->event_date;
            $events->save();

            return response([
                'message'=>'success',
                'events'=> $events,
                'status'=> 200
            ]);

        } else{

            return response([
                'message'=> 'error',
                'events' => 'Events does not exist',
                'status' => 404
            ]);
        }
    }

    public function transactions($events) {

        try{

            $url = '127.0.0.1:8000/api/pmfct-events-store';

            // Connection setup
            $connection = new AMQPStreamConnection('172.16.14.127', 5672, 'guest', 'guest');
            $channel = $connection->channel();

            $individualArray = array();

            $eventArray = [];
            $individualKeyArray = [];

            array_push($eventArray, $events);

            foreach ($eventArray as $event)
            {
                $individualKeyArray["aadhar_ref_id"]= $event->aadhar_ref_id;
                $individualKeyArray["aadhar"]= $event->aadhar;
                $individualKeyArray["aadhar_eid"]= $event->aadhar_eid;
            }

            $individualQueue =  json_encode($individualKeyArray);

            $transactionData = json_encode($events);

            $transactionMsg = new AMQPMessage($transactionData);
            $channel->basic_publish($transactionMsg, '', 'transaction');

            $individualMsg = new AMQPMessage($individualQueue);
            $channel->basic_publish($individualMsg, '', 'individual');

            // echo " [x] Sent JSON to direct exchange '$exchange' with routing key '$routingKey'\n";

            // Close connection
            $channel->close();
            $connection->close();

        } catch(Exception $e) {
             echo "<pre>";   print_r($e->getMessage()); die;
            //set activity log
            ActivityError::create(['url' => url()->current(), 'error_msg' => $e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while pushing Data into the Queue.']);
        }
    }

    // public function transactions($events) {

    //     try{

    //         $url = '127.0.0.1:8000/api/pmfct-events-store';

    //         // Connection setup
    //         $connection = new AMQPStreamConnection('172.16.14.127', 5672, 'guest', 'guest');
    //         $channel = $connection->channel();

    //         $individualArray = array();

    //         $eventArray = [];
    //         $individualKeyArray = [];

    //         array_push($eventArray, $events);

    //         foreach ($eventArray as $event)
    //         {
    //             $individualKeyArray["aadhar_ref_id"]= $event->aadhar_ref_id;
    //             $individualKeyArray["aadhar"]= $event->aadhar;
    //             $individualKeyArray["aadhar_eid"]= $event->aadhar_eid;
    //         }

    //         $individualQueue =  json_encode($individualKeyArray);

    //         // echo($events);

    //         // Declare a direct exchange
    //         // $exchange = 'transaction_exchange';
    //         // $queue = 'transaction';
    //         // $routingKey = 'transaction';

    //         // $channel->exchange_declare($exchange, 'direct', false, true, false);

    //         // Declare and bind queue to the exchange with routing key
    //         // $channel->queue_declare($queue, false, true, false, false);
    //         // $channel->queue_bind($queue, $exchange, $routingKey);

    //         $jsonData = json_encode($events);

    //         // Publish message
    //         // $msg = new AMQPMessage($jsonData, ['delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT]);
    //         // $channel->basic_publish($msg, $exchange, $routingKey);

    //         $transactionMsg = new AMQPMessage($jsonData);
    //         $channel->basic_publish($transactionMsg, '', 'transaction');

    //         $individualMsg = new AMQPMessage($individualQueue);
    //         $channel->basic_publish($individualMsg, '', 'individual');

    //         // echo " [x] Sent JSON to direct exchange '$exchange' with routing key '$routingKey'\n";

    //         // Close connection
    //         $channel->close();
    //         $connection->close();

    //         // dd('here');
    //     } catch(Exception $e) {
    //          echo "<pre>";   print_r($e->getMessage()); die;
    //         //set activity log
    //         // ActivityError::create(['url' => url()->current(), 'error_msg' => $e->getMessage()]);
    //         // return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while creating Invoice Information.']);
    //     }




    // }
}
