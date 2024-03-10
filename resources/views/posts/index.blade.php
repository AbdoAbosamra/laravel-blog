@extends('layouts.app')
@section('title') Index @endsection
@section('content')
<div class="container mt-5 mb-5">
    <div class="text-center">
        <button type="button" class="btn btn-success">Create Post</button>

    </div>
</div>
{{--@dd($posts)--}}

<div class="container px-5">
<table class="table px-2">
    <thead>

    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Posted By</th>
        <th scope="col">Created at</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post )
    <tr>
        <th scope="row">{{$post['id']}}</th>
        <td>{{$post['title']}}</td>
        <td>{{$post['postedBy']}}</td>
        <td>{{$post['created at']}}</td>

        <td>
            <a href="{{route('posts.show' , $post['id'])}}" class="btn btn-info">View</a>
            <a class="btn btn-primary">Edit</a>
            <a class="btn btn-danger">Delete</a>
        </td>


    </tr>
    @endforeach
    </tbody>
</table>
@endsection
