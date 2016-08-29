<?php

namespace App\Listeners;

use App\Events\TeamApplied;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use PDF;

class GenerateApplicationPDF
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TeamApplied  $event
     * @return void
     */
    public function handle(TeamApplied $event)
    {
        $data = ['application' => $event->app];
        $date = date("d-m-Y-H-i-s", strtotime($event->app->created_at));
        $file_name = "apps/" . str_replace(' ', '', $event->app->team) . $date . ".pdf";

        $event->pdf = PDF::loadView('pdf.application', $data);
        $pdf = PDF::loadView('pdf.application', $data)->save($file_name);

        $event->app->pdf = "/".$file_name;
        $event->app->save();
    }

}
