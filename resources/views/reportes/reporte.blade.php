<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .container {
            width: 100%;
            text-align: center;
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
    </style>

</head>
<body>
<header>
    <div class="container">
        <h3>REPORTE DE ANIMALES POR CORRAL</h3>
    </div>
</header>


@foreach($corrales as $corral)
    @if(count($corral->animales)>0)
        <section>
            <div class="section--header">
                <h3>CORRAL: {{$corral->nombre}}</h3>
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
                            <td>12</td>
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
