@extends('layouts.app')

@section('content')
    <div class="news-section">
    @foreach($posts as $post)
            <div class="news-item">
                <div class="news-date">
                    <div class="day">{{ $post->created_at->format('d') }}</div>
                    <div class="month-year">{{ $post->created_at->format('m \'y') }}</div>
                </div>
                <div class="news-image">
                    <img src="{{asset('storage/'.$post->image)}}" alt="{{ $post->title }}" max-height="50px" max-width="50px">
                    </div>
                <div class="news-content">
    
                    <h2>{{ $post->title }}</h2>
                    <p>{{ Str::limit($post->summary, 150) }}</p>
                    <a href="{{ url('/post', $post->id) }}">Read More</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
