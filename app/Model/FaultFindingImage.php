<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class FaultFindingImage extends Model
{

	protected $connection = 'mysql';
	protected $table = 'faults_findings_images';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	// public function hasmanyimages()
	// {
	// 	return $this->hasMany('App\Model\FaultFindingsImages', 'fault_finding_id');
	// }

	// public function hasmanyattendees()
	// {
	// 	return $this->hasMany('App\Model\FaultAttendees', 'staff_id');
	// }

	// public function hasonebuilding()
	// {
	// 	return $this->hasOne('App\Model\Building', 'staff_id');
	// }

/////////////////////////////////////////////////////////////////////////////////////////////////////

// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	// public function belongtomanysystem()
	// {
	// 	return $this->belongsToMany('App\Model\System', 'faults_systems', 'fault_id', 'system_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	// }

/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto

	public function belongtofaultfinding()
	{
		return $this->belongsTo('App\Model\FaultFinding', 'fault_finding_id');
	}

	// public function belongtobuilding()
	// {
	// 	return $this->belongsTo('App\Model\Building', 'building_id');
	// }

	// public function belongtosystem()
	// {
	// 	return $this->belongsTo()
	// }
}
