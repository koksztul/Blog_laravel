@extends('layouts.dashboard')
@section('content')
<h1>Choose moderator from users list</h1>
<form action="" method="post">
  @csrf
  <div class="form-group col-md-4">
    <select name="name" class="form-control" size="10" aria-label="select example">
        @foreach ($users as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
        @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection