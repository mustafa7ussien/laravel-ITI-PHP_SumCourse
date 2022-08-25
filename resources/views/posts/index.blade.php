@extends('layouts.app')

@section('main')

<table class="table">
    <thead>
        <tr> </tr>
        <tr>
          
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Details</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
    @foreach($posts as $p)
        <tr>

            <td >{{$p->id}}</td>
            <td>{{$p->title}}</td>
            <td>{{$p->body}}</td>
            <td>{{$p->detail}}</td>
            <td><img style="width:100%;height:5rem" src="{{asset('images/postImages/'.$p->image)}}" class="card-img-top" alt="..."></td>
            <td><a href="{{route("post.show",$p->id)}}" class="btn btn-primary"> Show </a></td>
            <td><a href="{{route("post.edit",$p->id)}}" class="btn btn-success"> Update </a></td>
            <td><a href="{{route("post.delete",$p->id)}}" class="btn btn-danger"> Delete </a></td>

        </tr>

    @endforeach
        </tbody>
    </table>
    <a href="{{route("posts.create")}}" class="btn btn-success"> Create new Post  </a>
       
@endsection