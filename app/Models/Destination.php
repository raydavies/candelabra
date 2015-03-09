<?php

class Destination extends Eloquent
{
	protected $table = 'destinations';

	protected $primaryKey = 'destination_id';

	public function mainImage()
	{
		return $this->images()->first();
	}

	public function images()
	{
		return $this->belongsToMany('Image', 'destinations_images')->withPivot('sort')->orderBy('sort', 'ASC');
	}

	public function tags()
	{
		return $this->belongsToMany('Tag', 'destinations_tags')->withPivot('sort')->orderBy('sort', 'ASC');
	}
}
