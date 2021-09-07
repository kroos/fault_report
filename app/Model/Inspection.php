<?php

namespace App\Model;

use \Carbon\Carbon;

// use Illuminate\Database\Eloquent\Model;
// class Inspection extends Model 	<-- 
class Inspection extends Model implements \LaravelFullCalendar\Event
{

	protected $connection = 'mysql';
	protected $table = 'inspections';
	protected $dates = ['date', 'date'];


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// fullcalendar

	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the event's title
	 *
	 * @return string
	 */
	public function getTitle()
	{
	    return $this->title;
	}

	/**
	 * Is it an all day event?
	 *
	 * @return bool
	 */
	public function isAllDay()
	{
	    // return (bool)$this->all_day;
	    return false;
	}

	/**
	 * Get the start time
	 *
	 * @return DateTime
	 */
	public function getStart()
	{
	    return Carbon::parse($this->date);
	}

	/**
	 * Get the end time
	 *
	 * @return DateTime
	 */
	public function getEnd()
	{
	    return Carbon::parse($this->date);
	}


	public function getEventOptions()
	{
		return [
			'url' => url('inspection', $this->getId().'/show'),
			//'isAllDay' => false,
			//'displayEventTime' => false,
		];
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// hasmanyinspectionchecklist
	public function hasmanyinspchecklist()
	{
		return $this->hasMany('App\Model\InspectionChecklist', 'inspection_id');
	}

	public function hasmanyinspimage()
	{
		return $this->hasMany('App\Model\InspectionImage', 'inspection_id');
	}

	public function hasmanyinspdoc()
	{
		return $this->hasMany('App\Model\InspectionDocument', 'inspection_id');
	}

	public function hasmanyinspattendees()
	{
		return $this->hasMany('App\Model\InspectionAttendee', 'inspection_id');
	}

	public function hasmanyinspreviewed()
	{
		return $this->hasMany('App\Model\InspectionReviewed', 'inspection_id');
	}

	public function hasmanyinspapproved()
	{
		return $this->hasMany('App\Model\InspectionApproved', 'inspection_id');
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////
// https://laravel.com/docs/5.6/eloquent-relationships#many-to-many
	// public function belongtomanysystem()
	// {
	// 	return $this->belongsToMany('App\Model\System', 'faults_systems', 'fault_id', 'system_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	// }

	// public function belongtomanyattendees()
	// {
	// 	return $this->belongsToMany('App\Model\Staff', 'faults_attendees', 'fault_id', 'attendees_id' )->withPivot('id')->withPivot('remarks')->withTimestamps();
	// }

/////////////////////////////////////////////////////////////////////////////////////////////////////
// belongto

	public function belongtostaff()
	{
		return $this->belongsTo('App\Model\Staff', 'staff_id');
	}

	public function belongtosystem()
	{
		return $this->belongsTo('App\Model\System', 'system_id');
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
