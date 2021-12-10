<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ture</title>

        <!-- CSS And JavaScript -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    </head>

    <body>
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">Ture</a>
                    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  href="{{ route('auth.logout') }}">Logout</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>

    <main class="container my-3 p-3">
        @yield('content')
    </main>
</body>
</html>