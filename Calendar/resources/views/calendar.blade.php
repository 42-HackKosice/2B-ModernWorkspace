{{--    @extends('layouts.app')--}}

{{--    @section('content')--}}
{{--            <link rel='stylesheet'--}}
{{--                  href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">Calendar</div>--}}

{{--                            <div class="card-body">--}}
{{--                                <div id='calendar'></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div >--}}
{{--            </div >--}}
{{--    @endsection--}}

{{--    @section('scripts')--}}
{{--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--        <script src="{{ asset('js/main.js') }}"></script>--}}

{{--        <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>--}}
{{--        <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>--}}
{{--        <script>--}}




{{--            $(document).ready(function () {--}}


{{--                // page is now ready, initialize the calendar...--}}
{{--                events ={!! json_encode($events) !!};--}}

{{--                $('#calendar').fullCalendar({--}}



{{--                    // put your options and callbacks here--}}
{{--                    events: events,--}}
{{--                    initialView: 'dayGridWeek',--}}

{{--                    eventClick: function(calEvent, jsEvent, view) {--}}
{{--                        // change the border color just for fun--}}
{{--                        $(this).css('border-color', 'red');--}}

{{--                    },--}}

{{--                    dayClick: function(date, jsEvent, view) {--}}

{{--                        alert('Clicked on: ' + date.format());--}}

{{--                        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);--}}

{{--                        alert('Current view: ' + view.name);--}}

{{--                        // change the day's background color just for fun--}}
{{--                        $(this).css('background-color', 'red');--}}

{{--                    }--}}

{{--                })--}}
{{--            })--}}

{{--        </script>--}}
{{--    @endsection--}}





<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Calendar</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.css" media="print">

    @yield('styles')
</head>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{route('calendar')}}">
                Calendar
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    @if(auth()->id()==23)
                        <li class="nav-item dropdown">
                            <a  class="nav-link " href={{route('users')}} >
                                Users
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a  class="nav-link " href={{route('events.create')}} >
                                Add event
                            </a>
                        </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a  class="nav-link " href={{route('calendar')}} >
                                Calendar
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="main mt-4">


        <link rel='stylesheet'
              href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">

                            <div style="font-size: 24px" class="card-header">

                                @if(Session::has('success'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif

                                <span>Calendar</span>
                                <span style="color: green" class="text- float-right "><b>{{$myDays}}</b></span>
                            </div>


                        <div class="card-body">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div >
        </div >




    </main>
</div>





</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<style> .fc-day:hover{background: silver;cursor: pointer;
    .fc-header-toolbar > .fc-toolbar-chunk:nth-child(2)::before {
        font-size: 1.75em;
        content: 'My Custom Header Text';
    }

</style>
<script>




    $(document).ready(function () {


        // page is now ready, initialize the calendar...
        events ={!! json_encode($events) !!};

        $('#calendar').fullCalendar({



            // put your options and callbacks here
            events: events,
            displayEventTime: false,


            header: {
                left: 'prev,next today ',
                center: 'title',
                right: 'month,basicWeek,'

            },


            //
            // dayRender: function(date, cell) {
            //     var today = $.fullCalendar.moment();
            //     var end = $.fullCalendar.moment().add(7, 'days');
            //     if (date.get('date') == today.get('date')) {
            //         cell.css("background", "#e8e8e8");
            //     }
            // },



            // dayRender: function(date, cell){
            //
            //     var eventsCount = 0;
            //     var date = date.format('YYYY-MM-DD');
            //     $('#calendar').fullCalendar('clientEvents', function(event) {
            //         var start = moment(event.start).format("YYYY-MM-DD");
            //         var end = moment(event.end).format("YYYY-MM-DD");
            //         if(date == start)
            //         {
            //             eventsCount++;
            //         }
            //         if (eventsCount<5){
            //             cell.css("background-color","silver");
            //         }
            //     });
            // },




            dayClick: function(date, allDay, jsEvent, view) {

                var eventsCount = 0;
                var date = date.format('YYYY-MM-DD');
                $('#calendar').fullCalendar('clientEvents', function(event) {
                    var start = moment(event.start).format("YYYY-MM-DD");
                    var end = moment(event.end).format("YYYY-MM-DD");
                    if(date == start)
                    {
                        eventsCount++;
                    }
                });
                if (eventsCount<5){
                    window.open('events/date/'+date, "_self");
                    info.jsEvent.preventDefault();
                }

            }

        })
    })

</script>
</body>

</html>

