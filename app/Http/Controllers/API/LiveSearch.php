<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class LiveSearch extends Controller
{
  function searchUser(Request $request)
{

  $data = $request->get('data');

  $users = User::where('name', 'like', "%{$data}%")
                   ->orWhere('phoneNumber', 'like', "%{$data}%")
                   ->orWhere('email', 'like', "%{$data}%")
                   ->paginate(10);

                   return response()->json(['users'=>$users]);

}
}
