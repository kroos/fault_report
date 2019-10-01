<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class SwAccessPIC extends Model
{

	protected $connection = 'mysql';
	protected $table = 'swaccess_pic';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasOne
	// public function hasmanyswitch()
	// {
	// 	return $this->hasMany('App\Model\')
	// }

/////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	// public function hasmanysystem()
	// {
	// 	return $this->hasMany('App\Model\FaultSystem', 'system_id');
	// }

	// public function hasmanyimage()
	// {
	// 	return $this->hasMany('App\Model\FaultImage', 'fault_id');
	// }

	// public function hasmanydevicetag()
	// {
	// 	return $this->hasMany('App\Model\FaultDeviceTag', 'fault_id');
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

	public function belongtoswaccess()
	{
		return $this->belongsTo('App\Model\SwitchAccess', 'swAccess_id');
	}

	// public function belongtobuilding()
	// {
	// 	return $this->belongsTo('App\Model\Building', 'building_id');
	// }

	// public function belongtostatus()
	// {
	// 	return $this->belongsTo('App\Model\Status', 'status_id');
	// }

	// public function belongtopriority()
	// {
	// 	return $this->belongsTo('App\Model\Priority', 'priority_id');
	// }
}
