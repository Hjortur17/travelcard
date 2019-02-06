<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $guarded = [];

	public function camping()
	{
		return $this->belongsToMany('App\Camping');
	}
}
