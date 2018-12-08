<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function login(Request $request){
    $user = new User;
    $user->eos_id = $request->input('key_account');
    $existing = User::where('name', $user->eos_id)->first();
    if (!$existing) {
      User::create($user);
    }
  }
}
