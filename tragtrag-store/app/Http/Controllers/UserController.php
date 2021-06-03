<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   	public function showProfile(Request $request) {
   		$users = [
   			'name' => $request->username,
   			'pass' => $request->password
   		];

   		return view('profile', ['users' => $users]);
	}
}
