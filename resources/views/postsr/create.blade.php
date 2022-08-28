@extends('layouts.app')

@section('content')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
<h1> Add new Post </h1>
<form  action="{{route("postrs.store")}}" method="POST" enctype="multipart/form-data">
    @include('sweetalert::alert')

    @csrf
    <div class="mb-3">
        <label class="form-label">Post Title</label>
        <input type="text"  name="title" class="form-control" >
    </div>
    <div class="mb-3">
        <label class="form-label">Post body</label>
        <input type="text"  name='body' class="form-control" >
    </div>
    <div class="mb-3">
        <label class="form-label">Post details</label>
        <input type="text" name="detail" class="form-control" >
    </div>
    <div class="mb-3">
        <label class="form-label">Post Image</label>
        <input type="file" name="image" class="form-control" >
    </div>
    <div class="mb-3">
        <select class="form-select" aria-label="Default select example" name="author_id">
            @foreach($authors as $author)
                <option value="{{$author->id}}">{{$author->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection