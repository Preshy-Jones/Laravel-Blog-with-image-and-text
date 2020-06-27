@extends('layouts.app')

@section('content')
        <a class="btn btn-default" href="{{ url('/posts')}}">Go Back</a>
        <h1>{{$post->title}}</h1>
        <img style="width:100%" src="/blog/public/storage/cover_images/{{$post->cover_image}}">        
        <br><br>
        <div>
            {{$post->body}}
        </div>
        <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a class="btn btn-success" href = "{{ url('posts/' . $post->id . '/edit') }}" >Edit</a>

                {!!Form::open(['action' => ['Postscontroller@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}   
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
@endsection