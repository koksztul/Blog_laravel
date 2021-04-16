@extends('layouts.dashboard')
@section('content')
<h1>Revoke moderator</h1>
<a href="https://adminlte.io/themes/AdminLTE/pages/examples/profile.html">https://adminlte.io/themes/AdminLTE/pages/examples/profile.html</a>
<div class="row">
    @foreach ($mods as $mod)
    <div class="col-md-3">
        <!-- Profile Image -->
        <form action="" method="post">
            @csrf
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                            src="../../dist/img/user4-128x128.jpg"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{$mod->name}}</h3>

                    <p class="text-muted text-center">Moderator</p>

                    <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Posts</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                        <b>Comments</b> <a class="float-right">543</a>
                    </li>
                    </ul>
                    <input name="id" type="hidden" value="{{$mod->id}}">
                    <button type="submit" class="btn btn-danger btn-block"><b>Revoke</b></button>
                </div>
            </div>
        </form>
    </div>
    @endforeach
</div>
    <!-- /.card-body -->
@endsection