@extends('layouts.app')

@section('content')



    <div class="container mt-5 mb-5">
        <div class="row">
            <div style="background-color:#f8faff" class=" col-md-6 offset-md-3 p-4 border border-dark">
                <h4>{{$event->user->name}}</h4>
                <ul class="timeline ">

                        <li>
                            {{$event->user->name}}
                            <span  class="float-right text-info">{{$event->start_time->toDateString()}} </span>
                            <div style="font-size: 16px">
                                {{$event->comments}}
                            </div>
                            @if($event->user->id == auth()->id())

                                <form method="post" action="{{route('events.destroy',$event->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="float-right btn-danger mt-3">Delete</button>
                                </form>

                                @endif

                        </li>





                </ul>

            </div>
        </div>
    </div>

@endsection
