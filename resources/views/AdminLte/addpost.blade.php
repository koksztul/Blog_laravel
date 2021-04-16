@extends('layouts.dashboard')
@section('content')
<h1>Add Post</h1>
<form action="" method="post">
  @csrf
  <div class="form-group col-md-6">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Example Title">
  </div>
  <div class="form-group col-md-6">
    <label for="exampleFormControlTextarea1">Text</label>
    <textarea class="form-control" name="text" rows="4"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection