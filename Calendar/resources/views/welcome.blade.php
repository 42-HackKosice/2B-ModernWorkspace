{{--<!DOCTYPE html>--}}
{{--<html>--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ trans('panel.site_title') }}</title>--}}
{{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />--}}
{{--    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />--}}
{{--    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />--}}
{{--    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />--}}
{{--    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />--}}
{{--    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />--}}
{{--    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />--}}
{{--    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />--}}
{{--    @yield('styles')--}}
{{--</head>--}}

{{--<div id="app">--}}
{{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                {{ config('app.name', 'Laravel') }}--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <!-- Left Side Of Navbar -->--}}
{{--                <ul class="navbar-nav mr-auto">--}}

{{--                </ul>--}}

{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        @if (Route::has('login'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <main class="main">--}}




{{--            @yield('content')--}}

{{--        <link rel='stylesheet'--}}
{{--              href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">{{ __('Register') }}</div>--}}

{{--                        <div class="card-body">--}}
{{--                            <div id='calendar'></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div >--}}
{{--        </div >--}}




{{--    </main>--}}
{{--</div>--}}





{{--</div>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>--}}
{{--<script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>--}}
{{--<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>--}}
{{--<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>--}}
{{--<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>--}}
{{--<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>--}}
{{--<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>--}}
{{--<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>--}}
{{--<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>--}}
{{--<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>--}}
{{--<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>--}}
{{--<script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>--}}
{{--<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>--}}
{{--<script src="{{ asset('js/main.js') }}"></script>--}}
{{--<script>--}}
{{--    $(function() {--}}
{{--        let copyButtonTrans = '{{ trans('global.datatables.copy') }}'--}}
{{--        let csvButtonTrans = '{{ trans('global.datatables.csv') }}'--}}
{{--        let excelButtonTrans = '{{ trans('global.datatables.excel') }}'--}}
{{--        let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'--}}
{{--        let printButtonTrans = '{{ trans('global.datatables.print') }}'--}}
{{--        let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'--}}

{{--        let languages = {--}}
{{--            'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'--}}
{{--        };--}}

{{--        $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })--}}
{{--        $.extend(true, $.fn.dataTable.defaults, {--}}
{{--            language: {--}}
{{--                url: languages['{{ app()->getLocale() }}']--}}
{{--            },--}}
{{--            columnDefs: [{--}}
{{--                orderable: false,--}}
{{--                className: 'select-checkbox',--}}
{{--                targets: 0--}}
{{--            }, {--}}
{{--                orderable: false,--}}
{{--                searchable: false,--}}
{{--                targets: -1--}}
{{--            }],--}}
{{--            select: {--}}
{{--                style:    'multi+shift',--}}
{{--                selector: 'td:first-child'--}}
{{--            },--}}
{{--            order: [],--}}
{{--            scrollX: true,--}}
{{--            pageLength: 100,--}}
{{--            dom: 'lBfrtip<"actions">',--}}
{{--            buttons: [--}}
{{--                {--}}
{{--                    extend: 'copy',--}}
{{--                    className: 'btn-default',--}}
{{--                    text: copyButtonTrans,--}}
{{--                    exportOptions: {--}}
{{--                        columns: ':visible'--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    extend: 'csv',--}}
{{--                    className: 'btn-default',--}}
{{--                    text: csvButtonTrans,--}}
{{--                    exportOptions: {--}}
{{--                        columns: ':visible'--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    extend: 'excel',--}}
{{--                    className: 'btn-default',--}}
{{--                    text: excelButtonTrans,--}}
{{--                    exportOptions: {--}}
{{--                        columns: ':visible'--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    extend: 'pdf',--}}
{{--                    className: 'btn-default',--}}
{{--                    text: pdfButtonTrans,--}}
{{--                    exportOptions: {--}}
{{--                        columns: ':visible'--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    extend: 'print',--}}
{{--                    className: 'btn-default',--}}
{{--                    text: printButtonTrans,--}}
{{--                    exportOptions: {--}}
{{--                        columns: ':visible'--}}
{{--                    }--}}
{{--                },--}}
{{--                {--}}
{{--                    extend: 'colvis',--}}
{{--                    className: 'btn-default',--}}
{{--                    text: colvisButtonTrans,--}}
{{--                    exportOptions: {--}}
{{--                        columns: ':visible'--}}
{{--                    }--}}
{{--                }--}}
{{--            ]--}}
{{--        });--}}

{{--        $.fn.dataTable.ext.classes.sPageButton = '';--}}
{{--    });--}}

{{--</script>--}}
{{--@yield('scripts')--}}
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>--}}
{{--<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>--}}
{{--<script>--}}




{{--    $(document).ready(function () {--}}


{{--        // page is now ready, initialize the calendar...--}}
{{--        events ={!! json_encode($events) !!};--}}

{{--        $('#calendar').fullCalendar({--}}



{{--            // put your options and callbacks here--}}
{{--            events: events,--}}
{{--            initialView: 'dayGridWeek',--}}

{{--            eventClick: function(calEvent, jsEvent, view) {--}}
{{--                // change the border color just for fun--}}
{{--                $(this).css('border-color', 'red');--}}

{{--            },--}}

{{--            dayClick: function(date, jsEvent, view) {--}}

{{--                alert('Clicked on: ' + date.format());--}}

{{--                alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);--}}

{{--                alert('Current view: ' + view.name);--}}

{{--                // change the day's background color just for fun--}}
{{--                $(this).css('background-color', 'red');--}}

{{--            }--}}


{{--        })--}}
{{--    })--}}

{{--</script>--}}
{{--</body>--}}

{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calendar</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body style=" background-image: url(https://cdn.pixabay.com/photo/2015/03/26/09/54/airport-690556_1280.jpg);background-size: cover;">
<div style="  background: rgba(0, 0, 0, 0.5); " class="flex-center position-ref full-height">

    @if (Route::has('login') && Auth::check())
        <div class="top-right links">
            <a  style="color: white" href="{{route('calendar')}}">Home</a>
        </div>
    @elseif (Route::has('login') && !Auth::check())
        <div class="top-right links">
            <a  style="color: white" href="{{ url('/login') }}">Login</a>
            <a style="color: white"  href="{{ url('/register') }}">Register</a>
        </div>
    @endif

    <div class="content">
        <div style="font-size: 48px; color:white" class="title m-b-md">
            <h1>
            Calendar</h1>
        </div>

        <div style="font-size: 48px; color:white" class="links">
          Organize your working days
    </div>
</div>
</body>
</html>
