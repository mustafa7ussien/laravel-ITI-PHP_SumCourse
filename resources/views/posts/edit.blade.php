@extends('layouts.app')

@section('main')

<h1>Edit Post </h1>
<form  action="{{route("post.update",$post->id)}}" method="POST">
    @method("put")
   

    @csrf
    <div class="mb-3">
        <label class="form-label">Post Title111</label>
        <input type="text"  name="title" class="form-control" value="{{$post->title}}" >
    </div>
    <div class="mb-3">
        <label class="form-label">Post body</label>
        <input type="text"  name='body' class="form-control" value="{{$post->body}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Post details</label>
        <input type="text" name="detail" class="form-control" value="{{$post->detail}}" >
    </div>
    <div class="mb-3">
        <label class="form-label">Post Image</label>
        <input type="text" name="image" class="form-control" value="{{$post->image}}" >
    </div>

    <button type="submit" class="btn btn-primary">update</button>
</form>



@endsection