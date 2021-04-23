<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $events = Event::with('user')->get();

        return view('events.index')->with([
            'events' => $events,
        ]);
   }

    public function create()
    {
        if (auth()->id()!=23){
            abort(403,'Unauthorized action.');
        }

        $users = User::all();



        return view('events.create')->with([
            'users' => $users
        ]);

   }




    public function store(Request $request)
    {
        $data = request()->validate([
            'start_time' => 'date|required',
            'user_id' => 'exists:users,id|required_without:everybody',
            'everybody' => 'required_without:user_id',
            'comments' => '',

        ]);

        $data+=['finish_time' => $request->get('start_time')];


        if ($request->get('everybody')=='on'){
            $data['everybody']= true ;
            $data['user_id'] = auth()->id();
            $events = Event::whereDate('start_time',$request->get('start_time'))->delete();
        }



        if (Event::whereDate('start_time', $request->get('start_time'))->where('everybody',true)->first()!=null){
            return redirect('calendar')->with('success', 'You cannot pick everybody day');
        }


        if (Event::whereDate('start_time', $request->get('start_time'))->where('user_id',$request->get('user_id'))->get()->isNotEmpty()) {

            return redirect('calendar')->with('success', 'User has already picked this day');
        }

        if (Event::whereDate('start_time', $request->get('start_time'))->count()>5){

            return redirect('calendar')->with('success', 'Day is full');
        }
        if ( $myTotalWorkingDaysMonth1 =  DB::table('users')->join('events','users.id','=','events.user_id')
                ->where('users.id',$request->get('user_id'))
                ->whereMonth('events.start_time', Carbon::create($request->get('start_time')))
                ->count()>14){

            return redirect('calendar')->with('success', 'User has picked max number of days per month');
        }








        Event::create($data);


       return redirect()->to('calendar');

   }

    public function show($id)
    {
        $event  = Event::with('user')->findOrFail($id);


        return view('events.show')->with([
            'event' => $event
        ]);

   }

    public function dateCreate($date)
    {

        try {
            $date2 = Carbon::create($date);
        } catch(InvalidArgumentException $e) {
            return redirect()->route('calendar');

        }


        if (Event::whereDate('start_time', $date2)->where('everybody',true)->first()!=null){
            return back()->with('success', 'You cannot pick everybody day');
        }

        if (Event::whereDate('start_time', $date2)->where('user_id',auth()->id())->get()->isNotEmpty()) {

            return back()->with('success', 'You already picked this day');
        }

        if (Event::whereDate('start_time', $date2)->count()>5){

            return back()->with('success', 'Day is full');
        }
        if ( $myTotalWorkingDaysMonth1 =  DB::table('users')->join('events','users.id','=','events.user_id')
                ->where('users.id',auth()->id())
                ->whereMonth('events.start_time', $date2)
                ->count()>14){

            return back()->with('success', 'You picked max number of days per month');
        }




        $data = ["user_id"=>auth()->id(),"finish_time"=> $date2,"start_time" =>  $date2,];
        Event::create($data);



        return redirect()->route('calendar');


   }

    public function destroy($id)
    {
        Event::findOrfail($id)->delete();


        return redirect()->route('calendar');



    }
}
