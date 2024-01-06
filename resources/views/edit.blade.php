@extends('layouts.master')

@section('content')

<div class="main-content mt-5">
    @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
    @endif
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    Edit Post
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" href="{{route('posts.index')}}">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <img style="width:200px" src="{{asset($post->image)}}" alt="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input name="image" type="file" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" value="{{$post->title}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="select" class="form-control" >
                        <option  value=""></option>
                        @foreach ($categories as $category)
                        <option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="5" >{{$post->description}}</textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
