<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function login(Request $request){
    $eos_id = $request->input('key_account');
    $user = User::where('name', $eos_id)->first();
    if (!$user) {
      $user = User::create([
          'eos_id' => $eos_id,
          'point' => 50
      ]);
      $user->save();
    }
    return $user;
  }
}
