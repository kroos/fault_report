<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
	protected $connection = 'mysql';
    protected $table = 'priorities';

	public function hasmanystatus()
	{
		return $this->hasMany('App\Model\Fault', 'priority_id');
	}
}
