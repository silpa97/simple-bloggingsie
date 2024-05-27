<header class="main-header bg-dark text-white py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="{{ url('/') }}" class="text-white text-decoration-none h4">My Blog</a>
        </div>
        <nav class="nav">
            <ul class="nav">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="{{ route('categories.index') }}" class="btn btn-primary">Categories</a></li>
                <li class="nav-item"><a href="{{ route('posts.create') }}" class="btn btn-primary">Add Post</a></li>
            <li class="dropdown">
           
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf 
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
          
        </li>
        </ul>

        </nav>
    </div>
</header>