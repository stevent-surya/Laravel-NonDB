<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AspireIT | Portofolio</title>

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <script src="{{ asset('asset/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/chart.min.js') }}"></script>
</head>
<body data-bs-theme="dark">

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold align-items-center d-flex" href="{{ url('/') }}">
                <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                AspireIT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="{{ url('/projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark text-center text-white py-4">
        <div class="container">
            <p class="mb-2">Terhubung dengan saya di media sosial:</p>
            <a href="https://www.instagram.com/aspire_sc/" class="text-white mx-2">Instagram</a>
            <a href="https://www.linkedin.com/in/stevent-candra-5bbb6b1b4/" class="text-white mx-2">LinkedIn</a>
            <a href="https://github.com/stevent-surya" class="text-white mx-2">GitHub</a>
            <p class="mt-3 mb-0">&copy; 2025 AspireIT. All Rights Reserved.</p>
        </div>
    </footer>

    @stack('scripts')

</body>
</html>