@extends("layouts.app")


@section("content")
<div class="container">
    <h1> </h1>
    <table class="table" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>View</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td>{{$author->id}}</td>
                <td>{{$author->name}}</td>
                <td>{{$author->email}}</td>
                <td><a href="{{route("authors.show", $author->id)}}" class="btn btn-primary">details </a></td>

            </tr>

        @endforeach
        </tbody>
    </table>
    <a href="{{route("authors.create")}}" class="btn btn-success"> Create new Author  </a>
</div>
@endsection
