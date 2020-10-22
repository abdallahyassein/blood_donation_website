<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    

    public function showBloodPoints(){

        $user= Auth()->user();

        return view('client.blood_amount')->with([
          'user'=>$user,
        ]);

    }
}
