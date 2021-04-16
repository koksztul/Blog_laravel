@extends('layouts.dashboard')
@section('content')
<h1>Edit Comment</h1>
        <form action="" method="post" style="
            padding: 10px;
            border-radius: 4px;
            border: 1px solid rgb(0, 0, 0);
          }">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Text</label>
              <textarea class="form-control" name="text" rows="3">{{ $comment[0]->text }}</textarea>
              <input type="hidden" name="commentid" value="{{$comment[0]->id}}">
              <input type="hidden" name="post_id" value="{{$comment[0]->post_id}}">
              <input type="hidden" name="user_id" value="{{$comment[0]->user_id}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <br>
@endsection
