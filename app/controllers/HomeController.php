<?php

class HomeController extends BaseController
{

	public function showDashboard($trip_id = null)
	{
		$trip_id = isset($trip_id) ? (int) $trip_id : 3;
		$trip = Trip::find($trip_id);

		return View::make('home')->with('trip', $trip);
	}

}
