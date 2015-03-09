<?php

class CityController extends BaseController
{

	public function showCity($city_id)
	{
		$trip = Trip::find(4);
		$cities = $trip->cities;
		$city = $cities->where('city_id', $city_id);
		//$city = City::find($city_id);

		return View::make('city')->with(array(
			'trip' => $trip,
			'city' => $city
		));
	}

}
