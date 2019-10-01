<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class Staff extends Model
{

	protected $connection = 'mysql';
	protected $table = 'staffs';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function hasmanylogin()
	{
		return $this->hasMany('App\Model\Login', 'staff_id');
	}

	public function hasmanyfault()
	{
		return $this->hasMany('App\Model\Fault', 'staff_id');
	}

	function hasmanyswaccess()
	{
		return $this->hasMany('App\Model\SwitchAccess', 'staff_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////

// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	public function belongtomanyattendees()
	{
		return $this->belongsToMany('App\Model\Fault', 'faults_attendees', 'staff_id', 'fault_id' )->withPivot('id')->withTimestamps();
	}


/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto
	// public function belongtolabel()
	// {
	// 	return $this->belongsTo('App\Model\Label', 'active');
	// }

}
