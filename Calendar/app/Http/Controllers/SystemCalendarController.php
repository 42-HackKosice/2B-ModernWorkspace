<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SystemCalendarController extends Controller
{
public function __construct()
{
    $this->middleware(['auth']);
}

    public function index()
    {
        $month =  Carbon::now();


        $myTotalWorkingDaysMonth1 =  DB::table('users')->join('events','users.id','=','events.user_id')
            ->where('users.id',auth()->id())
            ->whereMonth('events.start_time', $month)
            ->count();




        $myTotalWorkingDaysMonth = "In " . $month->format('F') . " I chose " . $myTotalWorkingDaysMonth1 . "/15 days";








        $events = [];
        $appointments = Event::with('user')->get();


        $id = auth()->id();

        foreach ($appointments as $appointment) {
            if (!$appointment->start_time) {
                continue;
            }
            $color = 'silver';
            $title = $appointment->user->name;
            if ($appointment->user_id==$id) {
                $color = 'green';
            }

            if ($appointment->everybody==true){
                $color = 'red';
                $title = 'Everybody ' . $appointment->comments;
            }

                $events[] = [
                    'title' => $title,
                    'start' => $appointment->start_time,
                    'url'   => route('events.show', $appointment->id),
                    'color' => $color,
                    'pro' => 'ano'

                ];
        }

        return view('calendar')->with([
            'events' => $events,
            'myDays' => $myTotalWorkingDaysMonth
        ]);
    }
}
