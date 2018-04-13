<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Refer extends Model
{
	/*
	 * save referer to database
	 * @param $ip
	 * @param $referCode
	 */
	public static function create( Request $request ) {
		$refer = new Refer();

		$refer->ip = $request->ip();
		$refer->refer_code = $request->get('ref');
		$refer->created_at = Carbon::now();
		$refer->updated_at = Carbon::now();

		$refer->save();
    }
}
