@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4>Latest News</h4>
                <ul class="timeline">
                    @foreach($events as $event)
                    <li>
                        <a target="_blank" href="https://www.totoprayogo.com/#">{{$event->user->name}}</a>
                        <a href="#" class="float-right">{{$event->start_time->toDateString()}} - {{$event->finish_time->toDateString()}}</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
@endsection
