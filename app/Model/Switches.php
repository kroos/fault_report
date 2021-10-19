<?php
namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class Switches extends Model
{
	protected $connection = 'mysql';
	protected $table = 'switches';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasOne
	// public function hasmanyswitch()
	// {
	// 	return $this->hasMany('App\Model\')
	// }

/////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmany
	public function hasmanyswtag()
	{
		return $this->hasMany('App\Model\SwitchTag', 'switch_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////
// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	public function belongtomanyswitch()
	{
		return $this->belongsToMany('App\Model\SwitchAccess', 'swaccess_switch', 'swAccess_id', 'switch_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto
	public function belongtoswaccess()
	{
		return $this->belongsTo('App\Model\SwAccessSwitch', 'building_id');
	}
}