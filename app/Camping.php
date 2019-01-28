<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camping extends Model
{
	/**
	* The attributes that aren't mass assignable.
	*
	* @var array
	*/
	protected $guarded = [];

	public function path()
	{
		return action('CampingController@show', ['lang' => app()->getLocale(), 'id' => $this->id]);
	}
}
