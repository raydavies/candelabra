<?php

class Trip extends Eloquent
{
	protected $table = 'trips';

	protected $primaryKey = 'trip_id';

	public function cities()
	{
		return $this->belongsToMany('City', 'trips_cities')->withPivot('sort')->orderBy('sort', 'ASC');
	}
}