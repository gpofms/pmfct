<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KPIMaster;
use Illuminate\Http\JsonResponse;
use Auth, Carbon\Carbon, Redirect;
use App\Models\ActivitySuccess;
use App\Models\ActivityError;
use App\Models\AgencyMaster;
use App\Models\EventMaster;

class KPIMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{

            $kpis = KPIMaster::orderBy('id', 'desc')->get();

            $kpi['title'] = "KPI Master";
            $kpi['routes'] = "kpi-master";
            $kpi['pagetitle'] = "KPI Master | PMFCT";

            return view('admin.kpi-master.index',$kpi, compact('kpis'));

        } catch(Exception $e) {
            // dd($e);
            ActivityError::create(['url' => url()->current(),'error_msg' =>$e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while showing Agencies.']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         try{

            $agency = AgencyMaster::select('id', 'name')->get();

            $kpi['title'] = "KPI Master";
            $kpi['routes'] = "kpi-master";
            $kpi['pagetitle'] = "KPI Master | PMFCT";

            return view('admin.kpi-master.create',$kpi, compact('agency'));

        } catch(Exception $e) {
            // dd($e);
            ActivityError::create(['url' => url()->current(),'error_msg' =>$e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while creating Agencies.']);
        }
    }

    public function getEventName(Request $request) {

        $ddo = EventMaster::select('id', 'name')
                    ->where('agency_id', $request->agency_id)
                    ->get();

        return response()->json($ddo);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            // dd($request->all());

            $this->validate($request, [
                'agency_id' => 'required',
                'event_id' => 'required',
                'kpi_name' => 'required',
                'description' => 'required',
            ]);

            $kpi = new KPIMaster();
            $kpi->agency_id = $request->agency_id;
            $kpi->event_id = $request->event_id;
            $kpi->kpi_name = $request->kpi_name;
            $kpi->description = $request->description;
            $kpi->equation = $request->equation;
            $kpi->created_by = 83;
            $kpi->created_at = Carbon::now();
            $kpi->save();

            ActivitySuccess::create(['activity_id' => 'KPI-Master-Create-New-Record', 'ip_address' => $_SERVER['REMOTE_ADDR'],'remark' => "KPI Details added successfully"]);

            return redirect('kpi-master')->with('success',"KPI Details added successfully");

        } catch(Exception $e) {

            ActivityError::create(['url' => url()->current(),'error_msg' =>$e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while adding KPI Details.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        try{

            $kpis = KPIMaster::find($id);

            $kpi['title'] = 'KPI Master';
            $kpi['subtitle'] = 'View KPI Master Details';
            $kpi['routes'] = 'kpi-master';
            $kpi['pagetitle'] = 'View KPI Master Details | PMFCT';

            return view('admin.kpi-master.show', $kpi, compact('kpis'));

        } catch(Exception $e) {

            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while viewing KPI Master Data']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        try {
            $kpis = KPIMaster::find($id);

            $agency = AgencyMaster::select('id', 'name')->get();

            $kpis['title'] = 'KPI Master';
            $kpis['routes'] = "kpi-master";
            $kpis['pagetitle'] = 'Edit KPI Details | PMFCT';
            $kpis['subtitle'] = 'Edit KPI Details';

            return view('admin.kpi-master.edit', $kpis, compact('kpis', 'agency'));
        } catch(Exception $e) {
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while editing data']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{

            $this->validate($request, [
                'agency_id' => 'required',
                'event_id' => 'required',
                'kpi_name' => 'required',
                'description' => 'required',
            ]);


            $kpis = KPIMaster::find($id);

            $kpis->agency_id = $request->agency_id;
            $kpis->event_id = $request->event_id;
            $kpis->kpi_name = $request->kpi_name;
            $kpis->description = $request->description;
            $kpis->equation = $request->equation;
            $kpis->updated_by = 83;
            $kpis->updated_at = Carbon::now();
            $kpis->save();

            ActivitySuccess::create(['activity_id' => 'KPI-Master-Data-updated', 'ip_address' => $_SERVER['REMOTE_ADDR'],'remark' => "KPI Master Data updated successfully"]);

            return redirect()->route('kpi-master.index')->with('success','KPI Master Data updated successfully');
        } catch(Exception $e) {
            //set activity log
            ActivityError::create(['url' => url()->current(),'error_msg' =>$e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while updating Data.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
