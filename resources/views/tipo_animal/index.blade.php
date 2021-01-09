@extends('layout')
@section('content')
    <div class="container-fluid titlecontainer shadow-sm">
        <h1 class="titlecontainer__title">Tipos de animales</h1>
    </div>
    <div class="container maincontainer card shadow">
        <div class="maincontainer__button">
            <a class="btn btn-sm btn-dark" href="{{route('tipo_animal.create')}}">NUEVO TIPO</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>OPCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tipos_animales as $tipo)
                <tr>
                    <td>{{$tipo->id}}</td>
                    <td>{{$tipo->nombre}}</td>
                    <td>
                        <a href="{{route('tipo_animal.edit',$tipo)}}">
                            <label class="btn btn-dark btn-label" for="">editar</label>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $tipos_animales->links() }}
    </div>
@endsection
