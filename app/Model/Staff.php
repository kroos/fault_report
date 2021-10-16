<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;

// use Illuminate\Database\Eloquent\Model;
class Staff extends Model
{

	protected $connection = 'mysql';
	protected $table = 'staffs';

	use Notifiable;


/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function hasmanylogin()
	{
		return $this->hasMany('App\Model\Login', 'staff_id');
	}

	public function hasmanyfault()
	{
		return $this->hasMany('App\Model\Fault', 'staff_id');
	}

	public function hasmanyswaccess()
	{
		return $this->hasMany('App\Model\SwitchAccess', 'staff_id');
	}

	public function hasmanytemplate()
	{
		return $this->hasMany('App\Model\Template', 'staff_id');
	}

	public function hasmanyinspection()
	{
		return $this->hasMany('App\Model\Inspection', 'staff_id');
	}

	public function hasmanyinspectionreview()
	{
		return $this->hasMany('App\Model\InspectionReview', 'reviewed_id');
	}

	public function hasmanyinspectionapprove()
	{
		return $this->hasMany('App\Model\InspectionApprove', 'approved_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////

// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	public function belongtomanyattendees()
	{
		return $this->belongsToMany('App\Model\Fault', 'faults_attendees', 'staff_id', 'fault_id' )->withPivot('id')->withTimestamps();
	}

	public function belongtomanysystem()
	{
		return $this->belongsToMany('App\Model\System', 'staffs_systems', 'staff_id', 'system_id' )->withPivot('id')->withTimestamps();
	}

	public function belongtomanysystemrole()
	{
		return $this->belongsToMany('App\Model\System', 'staffs_systems', 'staff_id', 'system_id' )->withPivot('id')->withTimestamps();
	}


/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto
	public function belongtoposition()
	{
		return $this->belongsTo('App\Model\Position', 'position_id');
	}

	public function belongtorole()
	{
		return $this->belongsTo('App\Model\Role', 'role_id');
	}

}
