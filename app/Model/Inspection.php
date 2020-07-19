<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class Inspection extends Model
{

	protected $connection = 'mysql';
	protected $table = 'inspections';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmanyinspectionchecklist
	public function hasmanyinschecklist()
	{
		return $this->hasMany('App\Model\InspectionChecklist', 'inspection_id');
	}

	public function hasmanyattendees()
	{
		return $this->hasMany('App\Model\TemplateChecklist', 'template_id');
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
