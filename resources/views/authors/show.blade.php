
@extends("layouts.app")

@section("content")
<h1> {{$author->name}} Info </h1>



<div class="card" style="width: 50%; margin:auto;">
    <img src="{{asset("authorimages/".$author->image)}}"
         width="200" height="200"
         class="card-img-top" alt="...">
    <div class="card-body">
        <h2 class="card-title"> {{$author->name}}</h2>
        <p class="card-text">Description: {{$author->email}}</p>
        <p class="card-text">Created_at: {{$author->created_at}}</p>
        <p class="card-text">Updated_at: {{$author->updated_at}}</p>

        <a href="{{route("authors.index")}}" class="btn btn-primary">show all Authors</a>
    </div>
</div>

{{-- <div>
    <h1> All posts wirtten by {{$author->name}}</h1>

    @foreach($author->postrs as $b)
        <li>  <a href="{{route("postrs.show", $b->id)}}"> {{$b->title}} </a></li>
@endforeach

</div> --}}
 


@endsection
