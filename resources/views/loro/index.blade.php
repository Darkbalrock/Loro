@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Listado Usuarios Loro</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{route('loro.nuevo')}}">Crear Usuario Loro</a>
      </div>
    </div>

  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
  @endif

  @if($message = Session::get('warning'))
    <div class="alert alert-danger">
      <p>{{$message}}</p>
    </div>
  @endif

  <table class="table table-striped table-sm">
    <tr>
      <th width="50px"><b>Id</b></th>
      <th width="350px"><b>Nombres</b></th>
      <th width="350px"><b>Apellidos</b></th>
      <th width="350px"><b>Cédula</b></th>
      <th width="350px"><b>Correo</b></th>
      <th width="350px"><b>Teléfono</b></th>
      <th width="180px"><b>Acción</b></th>
    </tr>
      @foreach ($usuLoros as $usuLoro)
        <tr>
          <td>{{$usuLoro->id}}</td>
          <td>{{$usuLoro->nombres}}</td>
          <td>{{$usuLoro->apellidos}}</td>
          <td>{{$usuLoro->cedula}}</td>
          <td>{{$usuLoro->correo}}</td>
          <td>{{$usuLoro->telefono}}</td>
          <td style="display: inline-flex;">
              <a class="btn btn-sm btn-info" href="{{route('loro.ver',$usuLoro->id)}}">Mostrar</a>
              <a class="btn btn-sm btn-warning" href="{{route('loro.editar',$usuLoro->id)}}">Editar</a>
              <a class="btn btn-sm btn-danger" href="{{route('loro.elimina',$usuLoro->_id)}}">Eliminar</a>
          </td>
        </tr>
      @endforeach
  </table>


  </div>
@endsection
