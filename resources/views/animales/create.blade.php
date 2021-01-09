@extends('layout')
@section('content')
    <div class="container-fluid titlecontainer shadow-sm">
        <h1 class="titlecontainer__title">Nuevo Animal</h1>
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

                        <form action="{{route('animal.store')}}" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <h5 class="d-flex justify-content-center">Nombre del animal</h5>
                                <div class="col-auto">
                                    <input name="nombre" value="{{old('nombre')}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row m-3 align-items-center d-flex justify-content-center">
                                <h5 class="d-flex justify-content-center">Corral</h5>
                                <div class="col-auto ">
                                    <select name="corral" id="corral" class="form-control">
                                        <option value="">Seleccione un corral</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-3 align-items-center d-flex justify-content-center">
                                <h5 class="d-flex justify-content-center">Tipo de animal</h5>
                                <div class="col-auto ">
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="">Seleccione un tipo de animal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-auto  d-flex justify-content-center m-3">
                                <button class="btn btn-dark" type="submit">Guardar Animal</button> &nbsp;
                                <a class="btn btn-outline-dark" href="{{route('animal.index')}}"
                                   type="submit">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
