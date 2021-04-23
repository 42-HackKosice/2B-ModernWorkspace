@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Working Day</div>

                    <div class="card-body">

                        <form method="POST" action="{{route('events.store')}}">
                            @csrf

                            <div class="form-group row">
                                <label for="comments" class="col-md-4 col-form-label text-md-right">Comment</label>

                                <div class="col-md-6">
                                    <input id="comments" type="text" class="form-control @error('comments') is-invalid @enderror" name="comments" value="{{ old('comments') }}"  autofocus>

                                    @error('comments')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start_time"  class="col-md-4 col-form-label text-md-right">Date*</label>

                                <div class="col-md-6">
                                    <input id="start_time" type="date"     class="form-control  @error('start_time') is-invalid @enderror " name="start_time"  required>

                                    @error('start_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror


                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="user_id" class="col-md-4 col-form-label text-md-right">
                                   User:
                                </label>
                                <div class="col-md-6">

                                <select  name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror ">

                                        <option value="none" class="py-1" selected disabled hidden> Select User </option>

                                    @foreach($users as $user)
                                        <option value="{{$user->id}}" class="py-1">{{$user->name}}</option>
                                    @endforeach


                                </select>
                                    @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="everybody" id="everybody" >

                                        <label class="form-check-label  @error('everybody') is-invalid @enderror" for="everybody">
                                           Everybody
                                        </label>

                                    </div>
                                    @error('everybody')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
