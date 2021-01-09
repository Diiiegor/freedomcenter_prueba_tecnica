<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Corral</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GRANJA </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{(request()->is('/')) ? 'active' : ''}}" aria-current="page"
                       href="/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(request()->is('corral')) ? 'active' : ''}}" href="{{route('corral.index')}}">Corrales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(request()->is('animales')) ? 'active' : ''}}" href="">Animales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(request()->is('tipo_animal')) ? 'active' : ''}}" href="{{route('tipo_animal.index')}}">Tipos de animales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(request()->is('animales')) ? 'active' : ''}}" href="">Reporte</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')


</div>
</body>
</html>
