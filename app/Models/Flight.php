<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
	protected $table = 'flights';

	protected $primaryKey = 'flight_id';

	public function airports()
	{
		return $this->belongsToMany('Airport', 'flights_stops')->withPivot('sort');
	}
}
