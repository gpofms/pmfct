<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgencyMaster;
use Illuminate\Support\Str;
use App\Models\PMFCTEvents;
use App\Models\PMFCTBasics;
use App\Models\ActivitySuccess;
use App\Models\ActivityError;
use Carbon\Carbon;
use App\Models\EventMaster;
use DB, DataTables, Redirect, Hashingids, PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return csrf_token();
        // dd('hello');

        // $login['title'] = "PMFCT";
        // $login['routes'] = "login";
        // $login['pagetitle'] = "PMFCT";

        // compact('bankTypes')

        return view('login');
    }

    public function login(Request $request) {

        try {

            $user = User::where('name',  $request->name)->first();

            //  if (! $user || ! Hash::check($request->password, $user->password)) {
            if (!$user || ($request->password != $user->password)) {
                return response()->json([
                    'message' => 'Username or password incorrect',
                ]);
            }

            $user->tokens()->delete();

            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'User logged in successfully',
            //     'name' => $user->name,
            //     'token' => $user->createToken('api_token')->plainTextToken,
            // ]);

             $transactions = PMFCTEvents::select('*')->get();

            $pmfctBasics =  PMFCTBasics::select('*')->get();

            $startDate = Carbon::now()->startOfMonth();

            $lastDate = Carbon::now()->lastOfMonth();

            $currentMonthTransactions = PMFCTEvents::whereBetween('created_at', [$startDate, $lastDate])->count();

            $date = Carbon::now();

            $monthName = $date->format('F');

            $totalEvents = EventMaster::withCount('transactions')->has('transactions')->get();

            $eventName = $totalEvents->pluck('name');

            $transactionsCount = $totalEvents->pluck('transactions_count');

            $totalAgencies = AgencyMaster::withCount('events')->has('events')->get();

            $agencyName = $totalAgencies->pluck('name');

            $eventsCount = $totalAgencies->pluck('events_count');

            return view('dashboard',compact('transactions', 'pmfctBasics', 'currentMonthTransactions', 'monthName', 'totalEvents', 'transactionsCount', 'eventName', 'totalAgencies', 'agencyName', 'eventsCount'));


        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        }
    }

    public function postLogin(Request $request)
    {

        try {
            $this->validate($request, [
                'name' => 'required|string',
                'password' => 'required|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        }

        try {
            $transactions = PMFCTEvents::select('*')->get();

            $pmfctBasics =  PMFCTBasics::select('*')->get();

            $startDate = Carbon::now()->startOfMonth();

            $lastDate = Carbon::now()->lastOfMonth();

            $currentMonthTransactions = PMFCTEvents::whereBetween('created_at', [$startDate, $lastDate])->count();

            $date = Carbon::now();

            $monthName = $date->format('F');

            $totalEvents = EventMaster::withCount('transactions')->has('transactions')->get();

            $eventName = $totalEvents->pluck('name');

            $transactionsCount = $totalEvents->pluck('transactions_count');

            $totalAgencies = AgencyMaster::withCount('events')->has('events')->get();

            $agencyName = $totalAgencies->pluck('name');

            $eventsCount = $totalAgencies->pluck('events_count');

            return view('dashboard',compact('transactions', 'pmfctBasics', 'currentMonthTransactions', 'monthName', 'totalEvents', 'transactionsCount', 'eventName', 'totalAgencies', 'agencyName', 'eventsCount'));

        } catch (\Exception $e) {
            // echo "<pre>";   print_r($e->getMessage()); die;
            ActivityError::create(['url' => url()->current(),'error_msg' =>$e->getMessage()]);
            return Redirect::back()->withInput($request->input())->withErrors(['msg' => 'Error while Logging In.']);

        }
    }

    public function dashboard()
    {
        $transactions = PMFCTEvents::select('*')->get();
        // dd($transactions[0]->subDistrict);

        $pmfctBasics =  PMFCTBasics::select('*')->get();

        $startDate = Carbon::now()->startOfMonth();

        $lastDate = Carbon::now()->lastOfMonth();

        $currentMonthTransactions = PMFCTEvents::whereBetween('created_at', [$startDate, $lastDate])->count();

        $date = Carbon::now();

        $monthName = $date->format('F');

        $totalEvents = EventMaster::withCount('transactions')->has('transactions')->get();

        $eventName = $totalEvents->pluck('name');

        $transactionsCount = $totalEvents->pluck('transactions_count');

        $totalAgencies = AgencyMaster::withCount('events')->has('events')->get();

        $agencyName = $totalAgencies->pluck('name');

        $eventsCount = $totalAgencies->pluck('events_count');

        return view('dashboard',compact('transactions', 'pmfctBasics', 'currentMonthTransactions', 'monthName', 'totalEvents', 'transactionsCount', 'eventName', 'totalAgencies', 'agencyName', 'eventsCount'));

        // return view('dashboard',compact('data'));
    }

    public function logout(Request $request) {

        // $request->user()->currentAccessToken()->delete();

        // return response()->json(
        // [
        //     'status' => 'success',
        //     'message' => 'User logged out successfully'
        // ]);

        return redirect('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'api_token' => Str::random(60),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
