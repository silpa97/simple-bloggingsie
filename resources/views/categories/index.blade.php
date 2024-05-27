@extends('posts.layouts.app')

@section('content')
<div class="container">
    <h1>Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create Category</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Is Published</th>
                <th>Published On</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->is_published ? 'Yes' : 'No' }}</td>
                    <td>{{ $category->published_on }}</td>
                    <td>
                        <a href="{{ route('categories.show',['id' => $category->id]) }}" class="btn btn-info">View</a>
                        <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
