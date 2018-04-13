<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
	public function form( Request $request ) {

		$this->validate($request, [
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:6|confirmed',
		]);

		$firstName = $request->input('first_name');
		$lastName = $request->input('last_name');
		$email = $request->input('email');
		$password = Hash::make($request->input('password'));

		$referCode = strtolower(str_random(6));

		Client::create($firstName, $lastName, $email, $password, $referCode);

		return back()->with('message', 'Registration was success');
    }
}
