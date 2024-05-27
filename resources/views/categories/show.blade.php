@extends('posts.layouts.app')

@section('content')
<div class="container">
    <h1>Category Details</h1>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
    <table class="table table-bordered mt-3">
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
        </tr>
    </table>
</div>
@endsection