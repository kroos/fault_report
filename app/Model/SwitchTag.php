<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class SwitchTag extends Model
{

	protected $connection = 'mysql';
	protected $table = 'switch_tags';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasOne
	// public function hasmanyswitch()
	// {
	// 	return $this->hasMany('App\Model\')
	// }

/////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	// public function hasmanyswtag()
	// {
	// 	return $this->hasMany('App\Model\SwitchTag', 'switch_id');
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
	public function belongtomanyswitchtag()
	{
		return $this->belongsToMany('App\Model\SwitchAccess', 'swaccess_switch', 'swAccess_id', 'swtag_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	}

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

	public function belongtoswitch()
	{
		return $this->belongsTo('App\Model\Switches', 'switch_id');
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
