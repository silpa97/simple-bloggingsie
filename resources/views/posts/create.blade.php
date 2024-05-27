@extends('posts.layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Create New Post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control selectric" name="category">
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->title }}</option>
                    @endforeach
    
                </select>
                </div>
            <div class="form-group">
                <label for="summary">Summary</label>
                <textarea name="summary" id="summary" class="form-control" rows="5" required>{{ old('summary') }}</textarea>
            </div>
            <div class="form-group">
                <label for="post_contents">Post Content</label>
                <textarea name="post_contents" id="post_contents" class="form-control" rows="5" required>{{ old('post_contents') }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
