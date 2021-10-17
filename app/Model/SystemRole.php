<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;

class SystemRole extends Model
{
	protected $connection = 'mysql';
    protected $table = 'systems_roles';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function hasmanyposition()
	{
		return $this->hasMany('App\Model\Position', 'system_role_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////

// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	// public function belongtomanyattendees()
	// {
	// 	return $this->belongsToMany('App\Model\Fault', 'faults_attendees', 'staff_id', 'fault_id' )->withPivot('id')->withTimestamps();
	// }


/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto
	// public function belongtosystemrole()
	// {
	// 	return $this->belongsTo('App\Model\SystemRole', 'position_id');
	// }
}