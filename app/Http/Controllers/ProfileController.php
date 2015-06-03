<?php namespace App\Http\Controllers;

use Auth;

class ProfileController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$user = Auth::user();

		return view('profile', compact(
			'user'
		));
	}

}
