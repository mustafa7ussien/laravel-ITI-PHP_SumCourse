@extends('layouts.app')



@section('main')
<h1>Show Blogs Posts </h1>
<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Body</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td> {{ $post['title'] }} </td>
                <td> {{ $post['body'] }}  </td>
                <td>{{ $post['details'] }} </td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection