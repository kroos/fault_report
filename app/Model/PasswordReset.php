<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
class PasswordReset extends Model
{

	protected $connection = 'mysql';
	protected $table = 'password_resets';
	protected $primaryKey = 'token';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
