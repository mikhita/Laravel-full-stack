@extends('layouts.master')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">

                    Trashed Posts

                    <a class="btn btn-success" href="{{route('posts.create')}}">Create</a>
                    <a class="btn btn-warning" href="">Trashed</a>

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
                <th scope="col" style="width: 20%">Action</th>

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
                  <td>{{$post->category_id}}</td>
                  <td>{{date('d-m-y', strtotime($post->created_at))}}</td>
                  <td>
                    <div class="d-flex">
                        <a href="{{route('posts.restored', $post->id)}}" class="btn-sm btn-success btn">Restore</a>

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
        </div>
    </div>
</div>

@endsection
