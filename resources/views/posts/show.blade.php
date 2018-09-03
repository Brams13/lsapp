@extends('layouts.app')


@section('content')
    <a href="/lsapp/public/posts" class="btn btn-secondary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="../storage/cover_images/{{$post->cover_image}}">
    <br><br>    
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <span class="btn-group">
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <div>
                    <a href="../posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                </div>

                <div>
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id, 'method' => 'POST', 'class' => 'pull-right']])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger btnPostDelete'])}}
                    {!!Form::close()!!}
                </div>
            @endif
        @endif
    </span>
@endsection
</div>