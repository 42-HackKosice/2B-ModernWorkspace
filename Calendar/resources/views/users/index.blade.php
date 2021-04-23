@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <!-- Start col -->
            @foreach($users as $user)
            <div class="col-lg-6 mb-4">
                <div class="card m-b-30">
                    <div class="card-body py-5">
                        <div class="row">
                            <div class="col-lg-3 text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" class="img-fluid mb-3" alt="user" />
                            </div>
                            <div class="col-lg-9">
                                <h4>{{$user->name}}</h4>
                                <p>{{$user->email}}</p>

                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="p-1">Days in workspace:</th>
                                            <td class="p-1">{{$user->events->count()}} {{ \Illuminate\Support\Str::plural('day',$user->events->count())}}</td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @endforeach
            <div class="col-12 d-flex justify-content-center">
            {{$users->links()}}
            </div>
        </div>

    </div>



            <!-- End col -->
@endsection
