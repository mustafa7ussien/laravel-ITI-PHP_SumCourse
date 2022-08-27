@extends('layouts.app')

@section('main')



<div class="card" style="width: 50%; margin:auto; background-color:lightgray">
    <h1> Post Info </h1>
    <img style="width:100%;height:10rem" src="{{asset('postimages/'.$postr->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h2 class="card-title"> {{$postr->title}}</h2>
        {{-- <h3 class="card-title"> {{$post->image}}</h3> --}}
        <p class="card-text">Body: {{$postr->body}}</p>
        <p class="card-text"> Details: {{$postr->detail}}</p>
        
        <p class="card-text">create_at: {{$postr->created_at}}</p>
        <p class="card-text">updated_at: {{$postr->updated_at}}</p>
        

        <a href="/postrs" class="btn btn-primary">Back</a>
    </div>
</div>
@endsection