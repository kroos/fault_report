<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class Inspection extends Model
{

	protected $connection = 'mysql';
	protected $table = 'inspections';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmanyinspectionchecklist
	public function hasmanyinspchecklist()
	{
		return $this->hasMany('App\Model\InspectionChecklist', 'inspection_id');
	}

	public function hasmanyinspimage()
	{
		return $this->hasMany('App\Model\InspectionImage', 'inspection_id');
	}

	public function hasmanyinspdoc()
	{
		return $this->hasMany('App\Model\InspectionDocument', 'inspection_id');
	}

	public function hasmanyinspattendees()
	{
		return $this->hasMany('App\Model\InspectionAttendee', 'inspection_id');
	}

	public function hasmanyinspreviewed()
	{
		return $this->hasMany('App\Model\InspectionReviewed', 'inspection_id');
	}

	public function hasmanyinspapproved()
	{
		return $this->hasMany('App\Model\InspectionApproved', 'inspection_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////
// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	// public function belongtomanysystem()
	// {
	// 	return $this->belongsToMany('App\Model\System', 'faults_systems', 'fault_id', 'system_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	// }

	// public function belongtomanyattendees()
	// {
	// 	return $this->belongsToMany('App\Model\Staff', 'faults_attendees', 'fault_id', 'attendees_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	// }

/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto

	public function belongtostaff()
	{
		return $this->belongsTo('App\Model\Staff', 'staff_id');
	}

	public function belongtosystem()
	{
		return $this->belongsTo('App\Model\System', 'system_id');
	}

	// public function belongtostatus()
	// {
	// 	return $this->belongsTo('App\Model\Status', 'status_id');
	// }

	// public function belongtopriority()
	// {
	// 	return $this->belongsTo('App\Model\Priority', 'priority_id');
	// }
}
