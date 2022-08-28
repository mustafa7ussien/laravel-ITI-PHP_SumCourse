@extends('layouts.app')

@section('main')

<h1> Add new Post </h1>
<form  action="{{route("posts.store")}}" method="POST">

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
        <input type="text" name="image" class="form-control" >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection