@extends('layouts.app')

@section('main')
<h1> Edit new Post </h1>
<form  action="{{route("postrs.update",$postr->id)}}" method="POST" enctype="multipart/form-data">

    @csrf

    @method("put")
    <div class="mb-3">
        <label class="form-label">Post Title</label>
        <input type="text"  name="title" class="form-control" value="{{$postr->title}}" >
    </div>
    <div class="mb-3">
        <label class="form-label">Post body</label>
        <input type="text"  name='body' class="form-control" value="{{$postr->body}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Post details</label>
        <input type="text" name="detail" class="form-control" value="{{$postr->detail}}" >
    </div>
    <div class="mb-3">
        <label class="form-label">Post Image</label>
        <input type="file" name="image" class="form-control" value="{{$postr->image}}">
    </div>

    <div class="mb-3">
        <select class="form-select" aria-label="Default select example" name="author_id">
            <option  selected disabled>Select author </option>

        @foreach($authors as $author)
                @if($postr->author_id==$author->id)
                <option value="{{$author->id}}" selected>{{$author->name}}</option>
                @else
                    <option value="{{$author->id}}"> {{$author->name}}</option>
                @endif
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection