@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>Editar Usuario Loro</h3>
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

  <form action="{{route('loro.update',$data->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-12">
        <strong>Id:</strong>
        <input type="number" name="id" class="form-control" value="{{$data->id}}"></input>
      </div>
      <div class="col-md-12">
        <strong>Nombres:</strong>
        <input type="text" name="nombres" class="form-control" value="{{$data->nombres}}"></input>
      </div>
      <div class="col-md-12">
        <strong>Apellidos:</strong>
        <input type="text" name="apellidos" class="form-control" value="{{$data->apellidos}}"></input>
      </div>
      <div class="col-md-12">
        <strong>Cédula:</strong>
        <input type="number" name="cedula" class="form-control" value="{{$data->cedula}}"></input>
      </div>
      <div class="col-md-12">
        <strong>Correo:</strong>
        <input type="text" name="correo" class="form-control" value="{{$data->correo}}"></input>
      </div>
      <div class="col-md-12">
        <strong>Teléfono:</strong>
        <input type="number" name="telefono" class="form-control" value="{{$data->telefono}}"></input>
      </div>
      <br><br>
      <div class="col-md-12">
        <a href="{{route('loro.index')}}" class="btn btn-sm btn-success">Atrás</a>
        <button type="submit" class="btn btn-sm btn-primary">Editar</button>
      </div>
    </div>
  </form>
</div>
@endsection
