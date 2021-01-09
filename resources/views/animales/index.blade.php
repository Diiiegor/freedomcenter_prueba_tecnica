@extends('layout')
@section('content')
    <div class="container-fluid titlecontainer shadow-sm">
        <h1 class="titlecontainer__title">Animales</h1>
    </div>
    <div class="container maincontainer card shadow">
        <div class="maincontainer__button">
            <a class="btn btn-sm btn-dark" href="{{route('animal.create')}}">NUEVO ANIMAL</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>TIPO</th>
                <th>CORRAL</th>
                <th>OPCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($animales as $animal)
                <tr>
                    <td>{{$animal->id}}</td>
                    <td>{{$animal->nombre}}</td>
                    <td>{{$animal->tipo_animal->nombre}}</td>
                    <td>{{$animal->corral->nombre}}</td>
                    <td>
                        <a href="{{route('corral.edit',$animal)}}">
                            <label class="btn btn-dark btn-label" for="">editar</label>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $animales->links() }}
    </div>
@endsection
