@extends('layout')
@section('content')
    <div class="container-fluid titlecontainer shadow-sm">
        <h1 class="titlecontainer__title">Nuevo Corral</h1>
    </div>
    <div class="container">
        <div class="container">
            <div class="container-form">
                <div class="container-form__main d-flex  justify-content-center maincontainer card shadow">

                    <div class="container d-flex flex-column justify-content-center">

                        @if($errors->any())
                            <div class="col-auto alert alert-danger">
                                <ol>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ol>
                            </div>
                        @endif

                        <form action="{{route('corral.store')}}" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <h5 class="d-flex justify-content-center">Nombre del corral</h5>
                                <div class="col-auto">
                                    <input name="nombre" value="{{old('nombre')}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row m-3 align-items-center d-flex justify-content-center">
                                <h5 class="d-flex justify-content-center">Capacidad m&aacute;xima de
                                    animales</h5>
                                <div class="col-auto ">
                                    <input name="capacidad_maxima" value="{{old('capacidad_maxima')}}" type="number"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-auto  d-flex justify-content-center m-3">
                                <button class="btn btn-dark" type="submit">Guardar Corral</button> &nbsp;
                                <a class="btn btn-outline-dark" href="{{route('corral.index')}}"
                                   type="submit">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
