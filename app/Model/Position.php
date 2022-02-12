<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	protected $connection = 'mysql';
    protected $table = 'positions';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function hasmanystaff()
	{
		return $this->hasMany('App\Model\Staff', 'position_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////

// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	// public function belongtomanyattendees()
	// {
	// 	return $this->belongsToMany('App\Model\Fault', 'faults_attendees', 'staff_id', 'fault_id' )->withPivot('id')->withTimestamps();
	// }


/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto
	public function belongtosystemrole()
	{
		return $this->belongsTo('App\Model\SystemRole', 'system_role_id');
	}
}