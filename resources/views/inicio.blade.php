@extends('layout.app')
@section('title','Trainers Create')

@section('content')
     @if(session('message'))
          <div class="alert alert-warning">
               {{ session('message') }}
          </div>
     @endif
<div>
     <ul class="list-group">
     <div>
          <li><a href="/Registro/create" class="btn btn-primary">Registrar vehiculos</a></li>
          &nbsp;
     </div>
     <div>
          <li><a href="/Registro/show" class="btn btn-primary">Listar vehiculos</a></li>
          &nbsp;
     </div>

     <div>
          <li><a href="/Registro/estadisticas" class="btn btn-primary">Estadisticas</a></li>
          &nbsp;
     </div>


     </ul>
</div>


@endsection