@php
$list_desa = [
    [
        'nama' => 'Barengkok',
        'url' => '/desa/1',
    ],
    [
        'nama' => 'Cibeber I',
        'url' => '/desa/2',
    ],
    [
        'nama' => 'Cibeber II',
        'url' => '/desa/3',
    ],
    [
        'nama' => 'Karacak',
        'url' => '/desa/4',
    ],
    [
        'nama' => 'Karehkel',
        'url' => '/desa/5',
    ],
    [
        'nama' => 'Karyasari',
        'url' => '/desa/6',
    ],
    [
        'nama' => 'Leuwiliang',
        'url' => '/desa/7',
    ],
    [
        'nama' => 'Leuwimekar',
        'url' => '/desa/8',
    ],
    [
        'nama' => 'Pabangbon',
        'url' => '/desa/9',
    ],
    [
        'nama' => 'Puraseda',
        'url' => '/desa/10',
    ],
    [
        'nama' => 'Purasari',
        'url' => '/desa/11',
    ],
];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sipida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/solid.css') }}">
    @yield('css')
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="LOGO" width="32" height="32">
                SIPIDA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            <i class="fa-solid fa-house-user"></i>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-sitemap"></i>
                            Profil Desa
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @foreach ($list_desa as $desa)
                                <li><a class="dropdown-item" href="{{ $desa['url'] }}">
                                        <i class="fa-solid fa-location-dot text-success me-2"></i>
                                        {{ $desa['nama'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @auth
                        <li class="nav-item">
                            <form action="/admin/logout" method="POST">
                                @csrf
                                <button class="btn btn-success" type="submit">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('konten')

    <footer class="mt-auto">
        <div class="container">
            <div class="row p-3">
                <div class="text-center">
                    <div>
                        Copyright &copy; Sipida 2022
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
