<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
	protected $connection = 'mysql';
	protected $table = 'logins';
	use Notifiable;

	protected $fillable = [
		'staff_id', 'username', 'password', 'active'
	];

	protected $hidden = [
		'password', 'remember_token'
	];
	
/////////////////////////////////////////////////////////////////////////////////////////////////////
	public function belongtostaff()
	{
		return $this->belongsTo('App\Model\Staff', 'staff_id');
	}


/////////////////////////////////////////////////////////////////////////////////////////////////////
// all acl will be done here

	public function changepass($id)
	{
		if (\Auth::user()->id == $id) {
			return true;
		} else {
			return false;
		}
	}

	// only profile owner can edit
	public function onlyProfileOwner($id)
	{
		if (\Auth::user()->belongtostaff->id == $id) {
			return true;
		} else {
			return false;
		}
	}
	// only the owner of fault can edit and delete
	public function onlyFaultOwner($id)
	{
		foreach(\Auth::user()->belongtostaff->hasmanyfault()->get() as $k) {
			if ($k->staff_id == $id ) {
				return true;
			} else {
				return false;
			}
		}
	}

	public function onlyFaultImageOwner($id)
	{
		foreach(\Auth::user()->belongtostaff->hasmanyfault()->get() as $k) {
			foreach($k->hasmanyimage()->get() as $v) {
				if($v->id == $id) {
					return true;
				} else {
					return false;
				}
			}
		}
	}
}
