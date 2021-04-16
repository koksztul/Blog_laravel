@extends('layouts.dashboard')
@section('content')
<h1>Edit Post</h1>
@foreach ($posts as $post)
        <form action="" method="post" style="
            padding: 10px;
            border-radius: 4px;
            border: 1px solid rgb(0, 0, 0);
          }">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Example Title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Text</label>
              <textarea class="form-control" name="text" rows="3">{{ $post->text }}</textarea>
            </div>
            <input name="post_id" type="hidden" value="{{ $post->id }}">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br>
          @endforeach
@endsection
