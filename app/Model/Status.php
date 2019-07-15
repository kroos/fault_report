<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $connection = 'mysql';
    protected $table = 'status';

	public function hasmanystatus()
	{
		return $this->hasMany('App\Model\Fault', 'status_id');
	}
}
