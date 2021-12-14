<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fs-3" href="/"><i class="bi bi-chevron-bar-contract"></i> RICHZXX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : ''}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : ''}}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : ''}}" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person"></i>
                        <span class="text-white fw-bold">{{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>

                        <hr class="dropdown-divider">
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-left"></i> Logout</button>
                    </form>
                <li>
            </ul>
            </li>
            @else
            <li class="nav-item">

                @if (Request::is('login'))
                <a href="/login" class="nav-link active"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                @endif

                @if (Request::is('register'))
                <a href="/register" class="nav-link active"><i class="bi bi-box-arrow-in-right"></i> Register</a>
                @endif

                @if (!Request::is('login') && !Request::is('register'))
                <a href="/login" class="nav-link active"><i class="bi bi-box-arrow-in-right"></i>
                    Login | Register</a>
                @endif

                @endauth

                </ul>
        </div>
    </div>
</nav>