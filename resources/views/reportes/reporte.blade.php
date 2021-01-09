<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .container {
            width: 100%;
            text-align: center;
            font-size: large;
        }

        .section--header {
            text-align: center;
            width: 100%;
            padding-top: 1px;
        }

        .section--body {
            width: 100%;
        }

        .table {
            width: 100%;
        }

        .table--thead {
            background: darkgrey;
            color: white;
            font-weight: bold;
        }

        th, td {
            text-align: center;
        }

        tr {
            border-bottom: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }

        .active {
            background: lightgray;
        }

        section {
            border: 1px solid;
            padding: 0px;
            margin-bottom: 50px;
        }

        .red {
            background: rgb(255, 64, 70);
        }
        *{
            font-family: 'Poppins', sans-serif;
        }
    </style>

</head>
<body>
<header>
    <div class="container">
        REPORTE DE ANIMALES POR CORRAL
    </div>
</header>


@foreach($corrales as $corral)
    @if(count($corral->animales)>0)
        <section>
            <div class="section--header">
                CORRAL: {{$corral->nombre}}
            </div>
            <div class="section--body">
                <table class="table">
                    <thead class="table--thead">
                    <tr>
                        <td>ID</td>
                        <td>NOMBRE</td>
                        <td>TIPO</td>
                        <td>EDAD</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($corral->animales as $index => $animal)
                        <tr class="{{$index%2==0?'active':''}} {{$animal->tipo_animal->id==\App\Animal::ALTA_PRELIGROSIDAD?'red':''}}">
                            <td>{{$animal->id}}</td>
                            <td>{{$animal->nombre}}</td>
                            <td>{{$animal->tipo_animal->nombre}}</td>
                            <td>{{$animal->edad}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    @endif
@endforeach

</body>
</html>
