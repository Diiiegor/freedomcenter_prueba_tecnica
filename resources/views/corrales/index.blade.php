@extends('layout')
@section('content')
    <div class="container-fluid titlecontainer shadow-sm">
        <h1 class="titlecontainer__title">Corrales</h1>
    </div>
    <div class="container maincontainer card shadow">
    <div class="maincontainer__button">
        <a class="btn btn-sm btn-dark" href="{{route('corral.create')}}">NUEVO CORRAL</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CAPACIDAD M&Aacute;XIMA</th>
            <th>EDAD PROMEDIO</th>
        </tr>
        </thead>
        <tbody>
        @foreach($corrales as $corral)
            <tr>
                <td>{{$corral->id}}</td>
                <td>{{$corral->nombre}}</td>
                <td>{{$corral->capacidad_maxima}}</td>
                <td>1</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $corrales->links() }}
    </div>
@endsection
