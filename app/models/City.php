<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table = 'cities';

	protected $primaryKey = 'city_id';

	public function destinations()
	{
		return $this->belongsToMany('App\Models\Destination', 'destinations');
	}

	public function setStateAttribute($value)
	{
		$this->attributes['state'] = strtoupper($value);
	}
}
