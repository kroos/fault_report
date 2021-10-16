<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class Role extends Model
{

	protected $connection = 'mysql';
	protected $table = 'roles';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	public function hasonestaff()
	{
		return $this->hasOne('App\Model\Staff', 'role_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////

// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	// public function belongtomanyfault()
	// {
	// 	return $this->belongsToMany('App\Model\Fault', 'faults_systems', 'fault_id', 'system_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	// }

/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto

	// public function belongtostaff()
	// {
	// 	return $this->belongsTo('App\Model\Staff', 'staff_id');
	// }
}
