<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Refer extends Model
{
	/*
	 * save referer to database
	 * @param $ip
	 * @param $referCode
	 */
	public static function create( $ip, $referCode ) {
		$refer = new Refer();

		$refer->ip = $ip;
		$refer->refer_code = $referCode;
		$refer->created_at = Carbon::now();
		$refer->updated_at = Carbon::now();

		$refer->save();
    }
}
