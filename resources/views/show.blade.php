@extends('layouts.master')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    Show Post
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success" href="{{route('posts.create')}}">Create</a>
                    <a class="btn btn-warning" href="">Trashed</a>
                </div>
            </div>

        </div>
        <div class="card-body">
         <table class="table table-bordered border-dark table-striped">

            <tbody>
                {{-- @foreach ($posts as $post) --}}
                {{-- <tr>
                  <th scope="row">{{$post->id}}</th>
                  <td>
                      <img src="{{asset($post->image)}}" alt="" style="width: 100px">
                  </td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->description}}</td>
                  <td>{{$post->category_id}}</td>
                  <td>{{date('d-m-y', strtotime($post->created_at))}}</td>
                  <td>
                      <a href="{{route('posts.edit', $post->id)}}" class="btn-sm btn-primary">Edit</a>
                      <a href="" class="btn-sm btn-danger">Delete</a>
                  </td>
                </tr> --}}
                {{-- @endforeach --}}

                <tr>
                    <td>id</td>
                    <td>{{$post->id}}</td>
                </tr>
                <tr>
                    <td>image</td>
                    <td><img width="300" src="{{asset($post->image)}}" alt=""></td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>{{$post->title}}</td>
                </tr>
                <tr>
                    <td>description</td>
                    <td>{{$post->description}}</td>
                </tr>
                <tr>
                    <td>publish date</td>
                    <td>{{date('d-m-y'), strtotime($post->created_at)}}</td>
                </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>

@endsection
