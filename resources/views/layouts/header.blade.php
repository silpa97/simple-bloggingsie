<header class="main-header bg-dark text-white py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="{{ url('/') }}" class="text-white text-decoration-none h4">My Blog</a>
        </div>
        <nav class="nav">
            <ul class="nav">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="{{ route('posts.create') }}" class="btn btn-primary">Add Post</a></li>
            </ul>
        </nav>
    </div>
</header>