<?php

namespace App\Manager;


use Illuminate\Http\Request;

class ReferManager {

	public static function existsReferCode( Request $request ) {
		if ( $request->exists( 'ref' ) ) {
			return true;
		}

		return false;
	}
}
