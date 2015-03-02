<?php

class CityController extends BaseController
{

	public function showCity($city_id)
	{
		$data = array();
		$data['trip'] = Trip::find(3);
		$data['city'] = City::find($city_id);

		return View::make('city')->with($data);
	}

}
