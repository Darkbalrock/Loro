@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>Nuevo Usuario Loro</h3>
    </div>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Ooops!</strong> Hay problemas con la validacion de datos!<br>
      <ul>
        @foreach ($errors as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('loro.save')}}" method="post">
    @csrf
    <div class="row">
      <div class="col-md-12" style="display:none;">
        <strong>Id:</strong>
        <input type="number" name="id" class="form-control" value={{$idMax}}></input>
      </div>
      <div class="col-md-12">
        <strong>Nombres:</strong>
        <input type="text" name="nombres" class="form-control" placeholder="Nombre"></input>
      </div>
      <div class="col-md-12">
        <strong>Apellidos:</strong>
        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos"></input>
      </div>
      <div class="col-md-12">
        <strong>Cédula:</strong>
        <input type="number" name="cedula" class="form-control" placeholder="Cédula"></input>
      </div>
      <div class="col-md-12">
        <strong>Correo:</strong>
        <input type="email" name="correo" class="form-control" placeholder="Correo"></input>
      </div>
      <div class="col-md-12">
        <strong>Teléfono:</strong>
        <input type="number" name="telefono" class="form-control" placeholder="Teléfono"></input>
      </div>
      <br><br>
      <div class="col-md-12">
        <a href="{{route('loro.index')}}" class="btn btn-sm btn-success">Atrás</a>
        <button type="submit" class="btn btn-sm btn-primary">Crear</button>
      </div>
    </div>
  </form>
</div>
@endsection
