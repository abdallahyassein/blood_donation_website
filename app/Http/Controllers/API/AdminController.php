<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{

  public function getUser(Request $request)
  {

    $phoneNumber = $request->get('phoneNumber');
    $user = User::where('phoneNumber', $phoneNumber)->first();

    if($user==null){
        return response()->json(['error'=>"there is no client with this number"]);
    }
      return response()->json(['user'=>$user]);

  }

  
  public function editBloodPoints(Request $request){

    $request->validate([
        'points' => 'required',
        'phoneNumber' => 'required',
    ]);

    $user =User::where('phoneNumber', $request->phoneNumber)->firstOrFail();

    if($user->amount < 10)
    {
      $user->amount += $request->points;
      $user->save();

    }

    

    return response()->json(['success'=>"Points Edited Successfully"]);

}


public function statisticsDetails(){
   
 
  $sumAPositive = User::where('blood_type', "A+")->sum('amount');
  $sumANegative = User::where('blood_type', "A-")->sum('amount');
  $sumBPositive = User::where('blood_type', "B+")->sum('amount');
  $sumBNegative = User::where('blood_type', "B-")->sum('amount');
  $sumOPositive = User::where('blood_type', "O+")->sum('amount');
  $sumONegative = User::where('blood_type', "O-")->sum('amount');
  $sumABPositive = User::where('blood_type', "AB+")->sum('amount');
  $sumABNegative = User::where('blood_type', "AB-")->sum('amount');
  
  return response()->json(['sumAPositive'=>  $sumAPositive ,
                           'sumANegative'=>  $sumANegative , 
                           'sumBPositive'=>  $sumBPositive , 
                           'sumBNegative'=>  $sumBNegative ,
                           'sumOPositive'=>  $sumOPositive ,
                           'sumONegative'=>  $sumONegative ,
                           'sumABPositive'=>  $sumABPositive ,
                           'sumABNegative'=>  $sumABNegative ]); 
  




}



}
