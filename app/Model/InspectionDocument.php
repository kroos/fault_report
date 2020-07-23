<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class InspectionDocument extends Model
{

	protected $connection = 'mysql';
	protected $table = 'inspection_documents';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	// public function hasmany()
	// {
	// 	return $this->hasMany('App\Model\FaultSystem', 'system_id');
	// }

	// public function hasmanyattendees()
	// {
	// 	return $this->hasMany('App\Model\TemplateChecklist', 'template_id');
	// }

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

	// public function belongtostaff()
	// {
	// 	return $this->belongsTo('App\Model\Staff', 'staff_id');
	// }

	public function belongtoinspection()
	{
		return $this->belongsTo('App\Model\Inspection', 'inspection_id');
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
