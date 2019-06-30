<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class Building extends Model
{

	protected $connection = 'mysql';
	protected $table = 'buildings';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	public function hasmanyfault()
	{
		return $this->hasMany('App\Model\Fault', 'building_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////

// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	// public function belongtomanyposition()
	// {
	// 	return $this->belongsToMany('App\Model\Position', 'staff_positions', 'staff_id', 'position_id' )->withPivot('main')->withPivot('id')->withTimestamps();
	// }


/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto

	// public function belongtostaff()
	// {
	// 	return $this->belongsTo('App\Model\Staff', 'staff_id');
	// }
}
