<?php

class Flight extends Eloquent
{
	protected $table = 'flights';

	protected $primaryKey = 'flight_id';

	public function airports()
	{
		return $this->belongsToMany('Airport', 'flights_stops')->withPivot('sort');
	}
}
