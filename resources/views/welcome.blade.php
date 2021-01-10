@extends('layout')
@section('content')
    <div class="container-fluid titlecontainer shadow-sm">
        <h1 class="titlecontainer__title">Dashboard</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>ANIMAL</th>
                            <th>EDAD</th>
                            <th>TIPO DE ANIMAL</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
