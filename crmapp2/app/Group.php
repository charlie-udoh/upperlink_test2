<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	//
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
	];

	public $timestamps = false;
}
