@extends('layouts.master')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">

                    All Posts
                
                    <a class="btn btn-success" href="{{route('posts.create')}}">Create</a>
                    <a class="btn btn-warning" href="">Trashed</a>

        </div>
        <div class="card-body">
         <table class="table table-striped">
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
              <tr>
                <th scope="row">1</th>
                <td>
                    <img src="https://picsum.photos/100" alt="">
                </td>
                <td>Lorem ipsum dolor sit amet</td>
                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam voluptatem, cum neque reiciendis at natus ipsa odio cupiditate</td>
                <td>News</td>
                <td>2-5-23</td>
                <td>
                    <a href="" class="btn-sm btn-primary">Edit</a>
                    <a href="" class="btn-sm btn-danger">Delete</a>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
    </div>
</div>

@endsection
