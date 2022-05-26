@extends('layouts.app')

@section('content')
<div class="padding">
    <div class="col-md-8">
        <!-- Column -->
        <div class="card"> 
            <div class="card-body little-profile text-center">
                <div class="pro-img"><img src="{{ asset('ProfilePictures/' . $user->name . '/pictures/' . $user->picture . '')}}"alt="user"></div>
                <h3 class="m-b-0">{{$user->name}}</h3>
                <p>{{$user->email}}</p> <a href="{{route('edit',['id' => $user->id])}}" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Edit</a>
               
            </div>
        </div>
    </div>
</div>

@endsection
