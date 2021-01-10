@extends('layout')
@section('content')
    <div class="container-fluid titlecontainer shadow-sm">
        <h1 class="titlecontainer__title">Dashboard</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow maincontainer ">
                    <div class="col-auto container d-flex flex-column justify-content-center align-items-center">
                        <label for="corral"><h5>Corrales:</h5></label>
                        <select name="corral" id="corral" class="form-control col-auto" onchange="actualizar_tabla()">
                            @foreach($corrales as $corral):
                            <option value="{{$corral->id}}">{{$corral->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ANIMAL</th>
                            <th>EDAD</th>
                            <th>TIPO DE ANIMAL</th>
                        </tr>
                        </thead>
                        <tbody id="animales_table">
                        @foreach($animales as $animal)
                            <tr>
                                <td>{{$animal->id}}</td>
                                <td>{{$animal->nombre}}</td>
                                <td>{{$animal->edad}}</td>
                                <td>{{$animal->tipo_animal->nombre}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col">
                <div class="card shadow maincontainer ">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
