<?php
namespace App\Http\Controllers;

use App\Models\Trip;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

    public function showDashboard($trip_id = null)
	{
		$trip_id = isset($trip_id) ? (int) $trip_id : 4;
		$trip = Trip::find($trip_id);

		return view('home')->with('trip', $trip);
	}

}
