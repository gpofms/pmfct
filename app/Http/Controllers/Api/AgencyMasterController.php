<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgencyMaster;
use Illuminate\Http\JsonResponse;
use Auth, Carbon\Carbon, Redirect;
use App\Models\ActivitySuccess;
use App\Models\ActivityError;

class AgencyMasterController extends Controller
{

    public function index(){

        try{

            $agencies = AgencyMaster::get();

            $agency['title'] = "Agency Master";
            $agency['routes'] = "agency-master";
            $agency['pagetitle'] = "Agency Master | PMFCT";

            return view('admin.agency-master.index',$agency, compact('agencies'));

        } catch(Exception $e) {
            // dd($e);
            ActivityError::create(['url' => url()->current(),'error_msg' =>$e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while showing Agencies.']);
        }
    }

    public function create(){

        try{

            $agency['title'] = 'Agency Master';
            $agency['routes'] = "agency-master";
            $agency['pagetitle'] = 'Add Agency Details | PMFCT';
            $agency['subtitle'] = 'Add Agency Details';

            return view('admin.agency-master.create',$agency);

        } catch(Exception $e) {
            // dd($e);
            ActivityError::create(['url' => url()->current(),'error_msg' =>$e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while creating Agencies.']);
        }
    }

    public function store(Request $request) {

        try {
            $this->validate($request, [
                'name' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        }

        try {

            $agency = AgencyMaster::create([
                'name' => $request->name,
                'created_at' => Carbon::now(),
            ]);
            // dd($agency);

            ActivitySuccess::create(['activity_id' => 'Agency-Master-Create-New-Record', 'ip_address' => $_SERVER['REMOTE_ADDR'],'remark' => "Agency Details added successfully"]);

            return redirect('agency-master')->with('success',"Agency Details added successfully");

        } catch(Exception $e) {
            // dd($e);
            ActivityError::create(['url' => url()->current(),'error_msg' =>$e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while inserting Agency Details.']);
        }
    }

    public function view(Request $request) {

        $request->validate([
            'id' => 'required',
        ]);

        $agency = AgencyMaster::find($request->id);

        if($agency){
            return response([
                'message'=> 'success',
                'agency' => $agency,
                'status' => 200
            ]);
        } else{
            return response([
                'message' => 'error',
                'agency' => 'Agency does not exist',
                'status' => 404
            ]);
        }
    }

    public function edit(Request $request) {

        try {

            dd($request->all());

            $agency = AgencyMaster::find($request->id);
            // dd($agency);

            $port = ClusterPort::select('port_id','port_name')->get();

            $ddo = Ddo::select('ddo_name','short_code')->where('active','Y')->get();   //where('treasury_id', Auth::user()->treasury_id)->get();

            $bank['title'] = 'Bank Master';
            $bank['routes'] = "bank-master";
            $bank['pagetitle'] = 'Edit Bank Details | GpoFms';
            $bank['subtitle'] = 'Edit Bank Details';

            return view('admin.bank-master.edit', $bank, compact('port','bank', 'ddo'));

        } catch(Exception $e) {

            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while editing data']);
        }
    }

    public function update(Request $request) {

        try {
            $this->validate($request, [
                'name' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        }

        $agency = AgencyMaster::find($request->id);

        if($agency){

            $agency->name = $request->name;
            $agency->save();

            return response([
                'message'=>'success',
                'agency'=> $agency,
                'status'=> 200
            ]);

        } else{

            return response([
                'message'=> 'error',
                'agency' => 'Agency does not exist',
                'status' => 404
            ]);
        }
    }

    public function delete(Request $request){

        $request->validate([
            'id' => 'required'
        ]);

        $agency = AgencyMaster::find($request->id);

        if($agency){

            $agency->delete();

            return response([
                'message' => 'success',
                'agency' => 'Agency has been deleted successfully!',
                'status' => 200
           ]);

        } else{

            return response([
                'message' => 'error',
                'agency' => 'Agency does not exist!',
                'status' => 404
            ]);
        }
    }
}
