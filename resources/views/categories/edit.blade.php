@extends('posts.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $category->title) }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description">{{ old('description', $category->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug', $category->slug) }}" required>
        </div>
        <div class="form-group">
            <label for="is_published">Is Published</label>
            <input type="checkbox" name="is_published" id="is_published" {{ old('is_published', $category->is_published) ? 'checked' : '' }}>
        </div>
        <div class="form-group">
            <label for="published_on">Published On</label>
            <input type="datetime-local" name="published_on" class="form-control" id="published_on" value="{{ old('published_on', $category->published_on) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
