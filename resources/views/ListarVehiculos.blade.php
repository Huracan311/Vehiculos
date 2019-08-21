@extends('layout.app')

@section('title', 'Mis publicaciones')

@section('content')

    <h1>Listar Vehiculos</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Placa</th>
        <th scope="col">Marca</th>
        <th class= "" scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($vehiculos as $vehiculo)
        <bold>
            @if($vehiculo->Marca=='Toyota')
                <td ><bold><font color="red">{{$vehiculo->Placa}}</td></bold></font>
            @else
                <td>{{$vehiculo->Placa}}</td>
            @endif
            <td>{{$vehiculo->Placa}}</td>
            <td>{{$vehiculo->Marca}}</td>
            @if($vehiculo->Marca=='Mazda')
                <td color="green"><font color="green">Los de Mazda son los mejores</td></font>

            @endif
        </tr>
    @endforeach
    </tbody>
</table>

@endsection