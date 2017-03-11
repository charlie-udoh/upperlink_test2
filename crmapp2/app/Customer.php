<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	//
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'firstname','surname', 'email', 'phonenum',
	];
	
	public $timestamps = false;
}
