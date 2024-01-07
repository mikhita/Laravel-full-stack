@extends('layouts.master')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">

                    All Posts

                    <a class="btn btn-success" href="{{route('posts.create')}}">Create</a>
                    <a class="btn btn-warning" href="{{route('posts.trashed')}}">Trashed</a>

        </div>
        <div class="card-body">
         <table class="table table-bordered border-dark table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col" style="width: 10%">Image</th>
                <th scope="col" style="width: 20%">Title</th>
                <th scope="col" style="width: 30%">Description</th>
                <th scope="col" style="width: 10%">Category</th>
                <th scope="col" style="width: 10%">Publish Date</th>
                <th scope="col" style="width: 20%">Actions</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                  <th scope="row">{{$post->id}}</th>
                  <td>
                      <img src="{{asset($post->image)}}" alt="" style="width: 100px">
                  </td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->description}}</td>
                  <td>{{$post->category->name}}</td>
                  <td>{{date('d-m-y', strtotime($post->created_at))}}</td>
                  <td>

                    <div class="d-flex">
                        <a href="{{route('posts.show', $post->id)}}" class="btn-sm btn-success btn">Show</a>

                        <a href="{{route('posts.edit', $post->id)}}" class="btn-sm btn-primary">Edit</a>
                        {{-- <a href="{{route('posts.destroy', $post->id)}}" class="btn-sm btn-danger">Delete</a> --}}
                        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-sm btn-danger btn">DELETE</button>
                        </form>
                    </div>
                  </td>
                </tr>
                @endforeach

            </tbody>
          </table>
          {{$posts->links()}}
        </div>
    </div>
</div>

@endsection
