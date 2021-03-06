<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
	protected $table = 'destinations';

	protected $primaryKey = 'destination_id';

	public function address()
	{
		return $this->belongsTo('App\Models\Address');
	}

	public function images()
	{
		return $this->belongsToMany('App\Models\Image', 'destinations_images')->withPivot('sort')->orderBy('sort', 'ASC');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Models\Tag', 'destinations_tags')->withPivot('sort')->orderBy('sort', 'ASC');
	}

	public function getUrlAttribute($value)
	{
		if (!empty($value)) {
			$value = 'http://' . $value;
		}
		return $value;
	}
}
