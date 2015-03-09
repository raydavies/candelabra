<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
	protected $table = 'trips';

	protected $primaryKey = 'trip_id';

	public function cities()
	{
		return $this->belongsToMany('App\Models\City', 'trips_cities')->withPivot('sort')->orderBy('sort', 'ASC');
	}

	public function flights()
	{
		return $this->belongsToMany('App\Models\Flight', 'users_flights')->withPivot(array('user_id', 'seat'));
	}
}
