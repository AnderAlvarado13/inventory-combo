<!DOCTYPE html>
<html>
<head>
    <title>Inventory - Comboplay</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url({{url('storage/images/1309251.jpeg')}});
background-size: cover;
  background-position: center;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">Inventario</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('employees.index')}}">Colaboradores</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('company_assets.index') }}">Activos de la Empresa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('logs.index') }}">Logs</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <div class="col-sm-12 p-3">
        @yield('content')
    </div>
    </main>
    <!-- <footer>
        <p>&copy; {{ date('Y') }} My Company</p>
    </footer> -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
