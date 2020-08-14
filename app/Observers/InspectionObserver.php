<?php

namespace App\Observers;

use App\Model\Inspection;

// load mail notification
use App\Notifications\InspectionUserNotification;

// https://appdividend.com/2018/01/02/laravel-model-observers-tutorial-example/
class InspectionObserver
	{
	 /**
	 * Handle the inspection "created" event.
	 *
	 * @param  \App\Model\Inspection  $inspection
	 * @return void
	 */
	public function created(Inspection $inspection)
	{
            if ($inspection->ready == 1) {
                // sent email to reviewer
                $users = \App\Model\Login::find([3,6,7]);
                foreach ($users as $user) {
					$user->notify(new InspectionUserNotification($inspection, $status = 'Review'));
                }
            } elseif ($inspection->ready == NULL) {
                // sent email to ppm creator
                // info('sent email to creator = '.$inspection->staff_id);
                // $user = App\Model\Login::find(7);
                // $user->notify(new InspectionUserNotification("A new user has visited on your application."));
                $inspection->belongtostaff->notify(new InspectionUserNotification($inspection, $status = 'Update'));
            }
	}

	 /**
	 * Handle the inspection "updated" event.
	 *
	 * @param  \App\Model\Inspection  $inspection
	 * @return void
	 */
	public function updated(Inspection $inspection)
	{
        if ($inspection->ready == 1 && $inspection->reviewed == 1 && $inspection->approved == NULL) {
            // sent email to approval
            // info('sent email to approval');
			$users = \App\Model\Login::find([2,7]);
			foreach ($users as $user) {
				$user->notify(new InspectionUserNotification($inspection, $status = 'Approval'));
			}
        } elseif ($inspection->ready == 1 && $inspection->reviewed == NULL && $inspection->approved == NULL) {
            // sent email to reviewer
            // info('sent email to reviewer');
			$users = \App\Model\Login::find([3,6,7]);
			foreach ($users as $user) {
				$user->notify(new InspectionUserNotification($inspection, $status = 'Review'));
			}
        } elseif ($inspection->ready == NULL && $inspection->reviewed == NULL && $inspection->approved == NULL) {
            // sent email to creator
            // info('sent email to creator = '.$inspection->staff_id);
            // $user = App\Model\Login::find(7);
            $inspection->belongtostaff->notify(new InspectionUserNotification($inspection, $status = 'Update'));
        }
	}

	 /**
	 * Handle the inspection "deleted" event.
	 *
	 * @param  \App\Model\Inspection  $inspection
	 * @return void
	 */
	public function deleted(Inspection $inspection)
	{
		//
	}

	 /**
	 * Handle the inspection "restored" event.
	 *
	 * @param  \App\Model\Inspection  $inspection
	 * @return void
	 */
	public function restored(Inspection $inspection)
	{
		//
	}

	 /**
	 * Handle the inspection "force deleted" event.
	 *
	 * @param  \App\Model\Inspection  $inspection
	 * @return void
	 */
	public function forceDeleted(Inspection $inspection)
	{
		//
	}
}
