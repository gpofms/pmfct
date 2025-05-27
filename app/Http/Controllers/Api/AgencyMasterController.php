<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AgencyMaster;
use Illuminate\Http\JsonResponse;
// use Auth, Carbon;

class AgencyMasterController extends Controller
{

    public function index(){

        $agencies = AgencyMaster::all();

        if($agencies){
            return response([
                'message'=> 'Success',
                'agencies' => $agencies
            ]);
        } else{
            return response([
                'message'=> 'error',
                'agencies' => 'No agencies in database',
            ]);
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

        $agency = AgencyMaster::create([
            'name' => $request->name,
        ]);

        $agency = AgencyMaster::find($agency->id);
        if ($agency) {
            return response(
                [
                    'message' => 'success',
                    'agency' => $agency,
                    'status' => 200
                ]
            );
        } else {
            return response(
                [
                    'message' => 'error',
                    'agency' => 'agency does not exist!',
                    'status' => 404
                ]
            );
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
