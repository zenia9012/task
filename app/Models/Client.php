<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	public static function create( $firstName, $lastName, $email, $password, $referCode ) {
		$client = new Client();

		$client->first_name = $firstName;
		$client->last_name = $lastName;
		$client->email = $email;
		$client->refer_code = $referCode;
		$client->password = $password;

		$client->save();
    }
}
