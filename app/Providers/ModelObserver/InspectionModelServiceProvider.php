<?php
namespace App\Providers\ModelObserver;
// https://appdividend.com/2018/01/02/laravel-model-observers-tutorial-example/

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Log;


class InspectionModelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Model\Inspection::observe(\App\Observers\InspectionObserver::class);
        // \App\Model\Inspection::creating(function($model){
        //     if ($model->ready == 1) {
        //         // sent email to reviewer
        //         info('sent email to reviewer');
        //     } elseif ($model->ready == NULL) {
        //         // sent email to ppm creator
        //         info('sent email to creator = '.$model->staff_id);
        //     }
        // });

        // \App\Model\Inspection::updating(function($model){
        //     if ($model->ready == 1 && $model->reviewed == 1 && $model->approved == NULL) {
        //         // sent email to approval
        //         info('sent email to approval');
        //     } elseif ($model->ready == 1 && $model->reviewed == NULL && $model->approved == NULL) {
        //         // sent email to reviewer
        //         info('sent email to reviewer');
        //     } elseif ($model->ready == NULL && $model->reviewed == NULL && $model->approved == NULL) {
        //         // sent email to creator
        //         info('sent email to creator = '.$model->staff_id);
        //     }
        // });
    }
}
