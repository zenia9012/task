<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

	/*
	 * save a client in a database
	 * @param $firstName
	 * @param $lastName
	 * @param $email
	 * @param $password
	 * @param $referCode
	 *
	 * @return Client $client
	 */
	public static function create( $firstName, $lastName, $email, $password, $referCode, $referalsCode = null, $referalIp = null ) {
		$client = new Client();

		$client->first_name = $firstName;
		$client->last_name = $lastName;
		$client->email = $email;
		$client->refer_code = $referCode;
		$client->referals_code = $referalsCode;
		$client->referals_ip = $referalIp;
		$client->password = $password;
		$client->created_at = Carbon::now();
		$client->updated_at = Carbon::now();

		$client->save();

		return $client;
    }
}
