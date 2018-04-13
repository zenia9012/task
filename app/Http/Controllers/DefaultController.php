<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DefaultController extends Controller
{
	public function index( Request $request ) {

		return view('index.main');
	}

	public function news( Request $request ) {

		return view('index.news');
	}
}
