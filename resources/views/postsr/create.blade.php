@extends('layouts.app')

@section('main')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

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

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection