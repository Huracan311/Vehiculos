@extends('layout.app')

@section('title', 'Mis publicaciones')

@section('content')

    <h1>Estadisticas</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Marca</th>
            <th scope="col">Cantidad</th>
            <th class= "" scope="col"></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mazda</td>
                <td>{{$sumMazda}}</td>

            </tr>
            <tr>
                <td>Toyota</td>
                <td>{{$sumToyo}}</td>

            </tr>
            <tr>
                <td>Chevrolet</td>
                <td>{{$sumChe}}</td>

            </tr>




        </tbody>
    </table>

@endsection