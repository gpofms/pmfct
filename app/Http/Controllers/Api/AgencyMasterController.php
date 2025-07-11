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

            $agencies = AgencyMaster::orderBy('id', 'desc')->get();

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

    public function show(Request $request, $id)
    {
       try{

            $agencies = AgencyMaster::find($id);

           $agency['title'] = 'Agency Master';
           $agency['routes'] = "agency-master";
           $agency['pagetitle'] = 'View Agency Details | PMFCT';
           $agency['subtitle'] = 'View Agency Details';

            return view('admin.agency-master.show', $agency, compact('agencies'));

        } catch(Exception $e) {

            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while viewing Agency Master Data']);
        }
    }

    public function edit(Request $request, $id) {

        try {

            $agencies = AgencyMaster::find($id);
            // dd($agencies);

            $agency['title'] = 'Agency Master';
            $agency['routes'] = "agency-master";
            $agency['pagetitle'] = 'Edit Agency Details | PMFCT';
            $agency['subtitle'] = 'Edit Agency Details';

            return view('admin.agency-master.edit', $agency, compact('agencies'));

        } catch(Exception $e) {

            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while editing data']);
        }
    }

    public function update(Request $request, $id) {

       try{

            $this->validate($request, [
                'agency_name' => 'required',
                'active' => 'required',
            ]);

            $agencies = AgencyMaster::find($id);

            $agencies->name = $request->agency_name;
            $agencies->active = $request->active;
            $agencies->save();

            ActivitySuccess::create(['activity_id' => 'Agency-Master-Data-updated', 'ip_address' => $_SERVER['REMOTE_ADDR'],'remark' => "Agency Master Data updated successfully"]);

            return redirect()->route('agency-master.index')->with('success','Agency Master Data updated successfully');
        } catch(Exception $e) {
            //set activity log
            ActivityError::create(['url' => url()->current(),'error_msg' =>$e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while updating Data.']);
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
