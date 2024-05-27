@extends('layouts.app')

@section('content')
    <div class="post-details">
        <h1>{{ $post->title }}</h1>
        <img src="{{asset('storage/'.$post->image)}}" alt="{{ $post->title }}" height="200px" width="200px">
        <h6>{{ $post->summary }}</h6>
        <p>{{ $post->post_contents }}</p>

    </div>
@endsection
