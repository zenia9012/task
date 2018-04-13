<?php

namespace App\Http\Controllers;


use App\Manager\ReferManager;
use App\Models\Refer;
use Illuminate\Http\Request;

class DefaultController extends Controller {
	/*
	 * main page controller
	 */
	public function index( Request $request ) {

		$refer = ReferManager::existsReferCode( $request );

		if ( $refer ) {
			Refer::create( $request );

			return redirect(route('main'));
		}

		return view( 'index.main' );
	}

	/*
	 * news page controller
	 */
	public function news( Request $request ) {

		$refer = ReferManager::existsReferCode( $request );

		if ( $refer ) {
			Refer::create( $request );

			return redirect(route('news'));
		}

		return view( 'index.news' );
	}
}
