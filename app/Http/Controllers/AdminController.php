<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Controllers\DB;



class AdminController extends Controller
{

  public function controllUser($phoneNumber)
  {
    $user = User::where('phoneNumber', $phoneNumber)->firstOrFail();
    return view('admin.controll_user')->with([

           'user' => $user,

       ]);

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

   

    
    return redirect('profile/'.$user->phoneNumber);

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
  
  
  
  return view('admin.statistics')->with([

    'sumAPositive' => $sumAPositive,
    'sumANegative' => $sumANegative,
    'sumBPositive' => $sumBPositive,
    'sumBNegative' => $sumBNegative,
    'sumOPositive' => $sumOPositive,
    'sumONegative' => $sumONegative,
    'sumABPositive' => $sumABPositive,
    'sumABNegative' => $sumABNegative,

]);



}



}
