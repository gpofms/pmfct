<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgencyMaster;
use Illuminate\Support\Str;

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

    public function postLogin(Request $request)
    {

        try {
            $this->validate($request, [
                'user_name' => 'required|string',
                'password' => 'required|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->validator->errors()->first(),
            ], 422);
        }

        $request->validate([
            'user_name'=>'required',
            'password'=>'required'
        ]);

        $agencies = AgencyMaster::get();
        $pagetitle ="Mohit";

        return view('dashboard',compact('agencies','pagetitle'));

        // return redirect('dashboard');

        // $user = User::where('email','=',$request->email)->first();
        // if($user){
        //     if(Hash::check($request->password, $user->password)){
        //         $request->session()->put('loginId', $user->id);
        //         return redirect('dashboard');
        //     } else {
        //         return back()->with('fail','Password not match!');
        //     }
        // } else {
        //     return back()->with('fail','This email is not register.');
        // }
    }

    public function dashboard()
    {
        return "Welcome to your dashabord.";
        // $data = array();
        // if(Session::has('loginId')){
        //     $data = User::where('id','=',Session::get('loginId'))->first();
        // }
        // return view('dashboard',compact('data'));
    }

    public function logout()
    {
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
