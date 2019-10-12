<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class SwitchAccess extends Model
{

	protected $connection = 'mysql';
	protected $table = 'switchaccess';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasOne
/////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	public function hasmanypic()
	{
		return $this->hasMany('App\Model\SwAccessPIC', 'swAccess_id');
	}

	public function hasmanyptw()
	{
		return $this->hasMany('App\Model\SwAccessPTW', 'swAccess_id');
	}

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
	public function belongtomanyswitch()
	{
		return $this->belongsToMany('App\Model\Switches', 'swaccess_switch', 'swAccess_id', 'switch_id' )->withPivot(['id', 'swtag_id', 'remarks'])->withTimestamps();
	}

	public function belongtomanyswitchtag()
	{
		return $this->belongsToMany('App\Model\SwitchTag', 'swaccess_switch', 'swAccess_id', 'swtag_id' )->withPivot('id', 'switch_id', 'remarks')->withTimestamps();
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto

	public function belongtostaff()
	{
		return $this->belongsTo('App\Model\Staff', 'staff_id');
	}

	// public function belongtobuilding()
	// {
	// 	return $this->belongsTo('App\Model\Building', 'building_id');
	// }

	public function belongtostatus()
	{
		return $this->belongsTo('App\Model\Status', 'status_id');
	}

	// public function belongtopriority()
	// {
	// 	return $this->belongsTo('App\Model\Priority', 'priority_id');
	// }

	// public function belongtostaff()
	// {
	// 	return $this->belongsTo('App\Model\Staff', 'staff_id');
	// }
}
