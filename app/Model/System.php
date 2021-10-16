<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class System extends Model
{

	protected $connection = 'mysql';
	protected $table = 'systems';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	// public function hasmanysystem()
	// {
	// 	return $this->hasMany('App\Model\FaultSystem', 'system_id');
	// }

	// public function hasmanyfault()
	// {
	// 	return $this->hasMany('App\Model\Fault', 'staff_id');
	// }

	// public function hasonebuilding()
	// {
	// 	return $this->hasOne('App\Model\Building', 'staff_id');
	// }

/////////////////////////////////////////////////////////////////////////////////////////////////////

// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	public function belongtomanyfault()
	{
		return $this->belongsToMany('App\Model\Fault', 'faults_systems', 'fault_id', 'system_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	}

	public function belongtomanystaff()
	{
		return $this->belongsToMany('App\Model\Staff', 'staffs_systems', 'staff_id', 'system_id' )->withPivot('id')->withTimestamps();
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

	// public function belongtosystem()
	// {
	// 	return $this->belongsTo()
	// }
}
