@extends('layout.app')
@section('title','Trainers Create')

@section('content')
    <h1>Registar Vehiculos</h1>
    <form method="get" action="/Registro/store">
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre </label>
            <input type="text" class="form-control" name ="Nombre">
            @error('Nombre')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Documento </label>
            <input type="text" class="form-control" name="Documento">
            @error('Documento')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Marca </label>
            <select class="form-control" id="exampleFormControlSelect1" name="Marca">
                <option>Mazda</option>
                <option>Chevrolet</option>
                <option>Toyota</option>
            </select>
            @error('Marca')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Placa</label>
            <input type="text" class="form-control" name="Placa">
            @error('Placa')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection