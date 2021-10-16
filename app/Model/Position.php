<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	protected $connection = 'mysql';
    protected $table = 'positions';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function hasstaff()
	{
		return $this->hasOne('App\Model\Staff', 'position_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////

// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	// public function belongtomanyattendees()
	// {
	// 	return $this->belongsToMany('App\Model\Fault', 'faults_attendees', 'staff_id', 'fault_id' )->withPivot('id')->withTimestamps();
	// }


/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto
	// public function belongtoposition()
	// {
	// 	return $this->belongsTo('App\Model\Position', 'position_id');
	// }

}