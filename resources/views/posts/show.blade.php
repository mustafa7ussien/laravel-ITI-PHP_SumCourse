@extends('layouts.app')

@section('main')



<div class="card" style="width: 50%; margin:auto; background-color:lightgray">
    <h1> Post Info </h1>
    <img style="width:100%;height:10rem" src="{{asset('images/postImages/'.$post->image)}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h2 class="card-title"> {{$post->title}}</h2>
        {{-- <h3 class="card-title"> {{$post->image}}</h3> --}}
        <p class="card-text">Body: {{$post->body}}</p>
        <p class="card-text"> Details: {{$post->detail}}</p>
        
        <p class="card-text">create_at: {{$post->created_at}}</p>
        <p class="card-text">updated_at: {{$post->updated_at}}</p>
        

        <a href="/posts" class="btn btn-primary">Back</a>
    </div>
</div>
@endsection