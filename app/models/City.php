<?php

class City extends Eloquent
{
	protected $table = 'cities';

	protected $primaryKey = 'city_id';

	public function setStateAttribute($value)
	{
		$this->attributes['state'] = strtoupper($value);
	}
}