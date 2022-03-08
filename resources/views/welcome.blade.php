<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Macasu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    </head>
    <body class="antialiased  text-white">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand px-5" href="#">MACASU LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto px-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ABOUT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item " href="#">ABOUT MACASU</a></li>
                            <li><a class="dropdown-item" href="#">MEMBERS</a></li>
                            <li><a class="dropdown-item" href="#">LEADERSHIP</a></li>
                            <li><a class="dropdown-item" href="#">CONTACTS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mt-0" href="#">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACTS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
