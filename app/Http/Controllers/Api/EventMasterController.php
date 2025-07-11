<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventMaster;

class EventMasterController extends Controller
{
    public function index(){

        $events = EventMaster::all();

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
                'name' => 'required',
                'agency_id' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // echo "<pre>";   print_r($e->getMessage()); die;
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        }

        $events = EventMaster::create([
            'name' => $request->name,
            'agency_id' => $request->agency_id,
        ]);

        $events = EventMaster::find($events->id);

        if ($events) {
            return response(
                [
                    'message' => 'success',
                    'events' => $events,
                    'status' => 200
                ]
            );
        } else {
            return response(
                [
                    'message' => 'error',
                    'events' => 'Events does not exist!',
                    'status' => 404
                ]
            );
        }
    }

    public function update(Request $request) {

        try {
            $this->validate($request, [
                'name' => 'required',
                'agency_id' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        }

        $event = EventMaster::find($request->id);

        // dd($event);

        if($event){

            $event->name = $request->name;
            $event->agency_id = $request->agency_id;
            $event->save();

            return response([
                'message'=>'success',
                'event'=> $event,
                'status'=> 200
            ]);

        } else{

            return response([
                'message'=> 'error',
                'event' => 'Event does not exist',
                'status' => 404
            ]);
        }
    }

    public function view(Request $request) {

        // dd(123);

        // return $request;

        $request->validate([
            'id' => 'required',
        ]);

        $event = EventMaster::find($request->id);

        if($event){
            return response([
                'message'=> 'success',
                'event' => $event,
                'status' => 200
            ]);
        } else{
            return response([
                'message' => 'error',
                'event' => 'Event does not exist',
                'status' => 404
            ]);
        }
    }
}
