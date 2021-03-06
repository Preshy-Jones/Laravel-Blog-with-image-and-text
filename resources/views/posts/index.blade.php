@extends('layouts.app')

@section('content')
        <h1>Posts</h1>
        @if(count($posts)> 0)
            @foreach ($posts as $post)
                <div class="well"> 
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="https://preshyjones.s3.eu-west-2.amazonaws.com/my-file/{{$post->cover_image}}">
                        </div>
                        <div class="col-m8-4 col-sm-8">
                            <h3><a href="{{ url('posts/'.$post->id) }}">{{$post->title}}</a></h3>
                            <small>Wrritten on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif    
@endsection