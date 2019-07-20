@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>Ver Usuario Loro</h3>
    </div>
  </div>
    <div class="row">
      <div class="col-md-12">
        <strong>Id:</strong>
        <label>{{$data->id}}</input>
      </div>
      <div class="col-md-12">
        <strong>Nombres:</strong>
        <label>{{$data->nombres}}</input>
      </div>
      <div class="col-md-12">
        <strong>Apellidos:</strong>
        <label>{{$data->apellidos}}</input>
      </div>
      <div class="col-md-12">
        <strong>Cédula:</strong>
        <label>{{$data->cedula}}</input>
      </div>
      <div class="col-md-12">
        <strong>Correo:</strong>
        <label>{{$data->correo}}</input>
      </div>
      <div class="col-md-12">
        <strong>Teléfono:</strong>
        <labe>{{$data->telefono}}</input>
      </div>
      <br><br>
      <div class="col-md-12">
        <a href="{{route('loro.index')}}" class="btn btn-sm btn-success">Atrás</a>
      </div>
    </div>
</div>
@endsection
