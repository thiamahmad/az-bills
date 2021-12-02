<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AZ-BILLS</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    <link rel="stylesheet" href={{ asset('css/fontawesome/css/all.min.css') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href={{ asset('css/perso.css') }}>
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg mb-5 navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mr-auto" href="#">AZ BILLS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('structures.index') }}">Structures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('structures.customers.index', 1) }}">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paiements</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">S'inscrire</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>

    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
