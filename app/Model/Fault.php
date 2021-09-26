<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class Fault extends Model
{

	protected $connection = 'mysql';
	protected $table = 'faults';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	// public function hasmanysystem()
	// {
	// 	return $this->hasMany('App\Model\FaultSystem', 'system_id');
	// }

	public function hasmanyimage()
	{
		return $this->hasMany('App\Model\FaultImage', 'fault_id');
	}

	public function hasmanyfaultdoc()
	{
		return $this->hasMany('App\Model\FaultDocument', 'fault_id');
	}

	public function hasmanydevicetag()
	{
		return $this->hasMany('App\Model\FaultDeviceTag', 'fault_id');
	}

	public function hasmanyfaultfinding()
	{
		return $this->hasMany('App\Model\FaultFinding', 'fault_id');
	}

	public function hasmanyfaultissue()
	{
		return $this->hasMany('App\Model\FaultIssue', 'fault_id');
	}

	public function hasmanyfaultsolution()
	{
		return $this->hasMany('App\Model\FaultSolution', 'fault_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////
// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	public function belongtomanysystem()
	{
		return $this->belongsToMany('App\Model\System', 'faults_systems', 'fault_id', 'system_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	}

	public function belongtomanyattendees()
	{
		return $this->belongsToMany('App\Model\Staff', 'faults_attendees', 'fault_id', 'attendees_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto

	public function belongtostaff()
	{
		return $this->belongsTo('App\Model\Staff', 'staff_id');
	}

	public function belongtobuilding()
	{
		return $this->belongsTo('App\Model\Building', 'building_id');
	}

	public function belongtostatus()
	{
		return $this->belongsTo('App\Model\Status', 'status_id');
	}

	public function belongtopriority()
	{
		return $this->belongsTo('App\Model\Priority', 'priority_id');
	}
}
