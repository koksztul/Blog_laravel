@extends('layouts.dashboard')
@section('content')
<h1>My Comments</h1>
<div class="row d-flex justify-content-start">
    <div class="table-responsive col-md-8">
        <div class="table-wrapper">
            <div class="table-title">
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Post Title</th>
                        <th>Comment Text</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $comment->title}}</td>
                        <td>{{ $comment->text}}</td>
                        <td>
                            <form method="POST">
                                @csrf
                                <a href="post/{{$comment->post_id}}" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4;" class="material-icons">&#xE417;</i></a>
                                <a href="comment/edit/{{$comment->comment_id}}" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
                                <button type="submit" style="color: #E34724;" class="material-icons">&#xE872;</button>
                                <input type="hidden" name="comment_id" value="{{$comment->comment_id}}"> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>     
                </tbody>
            </table>
        </div>
    </div>  
</div>   

@endsection
