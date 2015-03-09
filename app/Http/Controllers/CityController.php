<?php
namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Destination;

class CityController extends Controller
{
	public function showCity($city_id)
	{
		$city_id = (int) $city_id;
		$trip = Trip::find(4);
		$cities = $trip->cities;
		$city = $cities->where('city_id', $city_id)->first();

		$destinations = Destination::where('city_id', '=', $city_id)->get();

		return view('city')->with([
			'trip' => $trip,
			'city' => $city,
			'destinations' => $destinations
		]);
	}
}
