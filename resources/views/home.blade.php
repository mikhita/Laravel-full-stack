@extends('layouts.master')

@section('content')
<main role="main" class="container">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
    {{-- <img src="{{asset('storage/images/new_image.webp')}}" alt="" style="width: 50%"> --}}
    <div class="col-md-4 mt-5">
        <div class="card">
            <div class="card-body">
                <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for=""></label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mt-2">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="{{route('download')}}" class="btn btn-primary mt-3">Download Image</a>
</main>

  
@endsection



