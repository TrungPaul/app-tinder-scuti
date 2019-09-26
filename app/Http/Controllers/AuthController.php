<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends BaseController
{
    public $successStatus = 200;

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'type' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
         $input = $request->all();
         $input['password'] = bcrypt($input['password']);
         $user = User::create($input);
         $success['token'] =  $user->createToken('AppName')->accessToken;
         return response()->json(['success'=>$success], $this->successStatus);
    }

    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('AppName')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        } else {
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }
    public function getUser()
    {
        $id = Auth::user()->id;
        $result = User::with('candidates', 'company')->find($id)->toArray();
        $count = 1;
        $perpage = 1;
        return $this->sendResponse($result, $count, $perpage);
    }
}
