<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class ClientController extends Controller
{

  public $successStatus = 200;
  /**
       * login api
       *
       * @return \Illuminate\Http\Response
       */
      public function login(){
        $email=request('email');

        $field = filter_var($email,FILTER_VALIDATE_EMAIL)? 'email': 'phoneNumber';
          if(Auth::attempt([$field => request('email'), 'password' => request('password')])){
              $user = Auth::user();
              $success['token'] =  $user->createToken('MyApp')-> accessToken;
              return response()->json(['success' => $success,'user'=>$user], $this-> successStatus);
          }
          else{
              return response()->json(['error'=>'Unauthorised'], 401);
          }
      }
  /**
       * Register api
       *
       * @return \Illuminate\Http\Response
       */
      public function register(Request $request)
      {
          $validator = Validator::make($request->all(), [
              'name' => 'required',
              'email' => 'required|email|unique:users',
              'phoneNumber' => 'required|unique:users',
              'blood_type' => 'required',
              'password' => 'required',
              'c_password' => 'required|same:password',
          ]);
  if ($validator->fails()) {
              return response()->json(['error'=>$validator->errors()], 401);
          }
  $input = $request->all();
          $input['password'] = bcrypt($input['password']);
          $user = User::create($input);
          $success['token'] =  $user->createToken('MyApp')-> accessToken;
          $success['name'] =  $user->name;
  return response()->json(['success'=>$success], $this-> successStatus);
      }
  /**
       * details api
       *
       * @return \Illuminate\Http\Response
       */
      public function details()
      {
          $user = Auth::user();
          return response()->json(['success' => $user], $this-> successStatus);
      }

}
