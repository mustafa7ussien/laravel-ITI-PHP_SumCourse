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
            <td><img style="width:100%;height:5rem" src="{{asset('postimages/'.$p->image)}}" class="card-img-top" alt="..."></td>
            <td><a href="{{route("postrs.show",$p->id)}}" class="btn btn-primary"> Show </a></td>
            <td><a href="{{route("postrs.edit",$p->id)}}" class="btn btn-success"> Edit </a></td>
            <td>
                <form action="{{route("postrs.destroy", $p->id)}}" method="POST">
                    @csrf
                    @method("delete")
                    <input type="submit"  class="btn btn-danger" value="Delete">
                </form>
            </td>

        </tr>

    @endforeach
        </tbody>
    </table>
    <a href="{{route("postrs.create")}}" class="btn btn-success"> Create new Post  </a>
       
@endsection