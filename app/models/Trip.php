<?php

class Trip extends Eloquent
{
	protected $table = 'trips';

	protected $primaryKey = 'trip_id';

	public function cities()
	{
		return $this->belongsToMany('City', 'trips_cities')->withPivot('sort')->orderBy('sort', 'ASC');
	}

	public function flights()
	{
		return $this->belongsToMany('Flight', 'users_flights')->withPivot(array('user_id', 'seat'));
	}
}
