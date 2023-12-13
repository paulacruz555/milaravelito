@extends('pagPlantilla')

@section('titulo')
  <h1 class="display-4">Pagina Lista</h1>
@endsection

@section('seccion')

  @if(session('msj'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('msj') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
    </div>
  @endif

  <form action="{{ route('Estudiante.xUpdate', $xActAlumnos->id) }}" method="POST">
    @method('PUT')
    @csrf

    @error('codEst')
      <div class="alert alert-danger">
        El código es requerido,
      </div>
    @enderror

    @error('nomEst')
      <div class="alert alert-danger">
        El nombre es requerido,
      </div>
    @enderror

    <input type="text" name="codEst" value="{{ $xActAlumnos->codEst }}" placeholder="Código" class="form-control mb-2">
    <input type="text" name="nomEst" value="{{ $xActAlumnos->nomEst }}" placeholder="Nombres" class="form-control mb-2">
    <input type="text" name="apeEst" value="{{ $xActAlumnos->apeEst }}" placeholder="Apellidos" class="form-control mb-2">
    <input type="date" name="fnaEst" value="{{ $xActAlumnos->fnaEst }}" placeholder="Fecha Nac." class="form-control mb-2">

    <select name="turMat" class="form-control mb-2">
      <option value="">Seleccione...</option>
      <option value="1" @if ($xActAlumnos->turMat == 1) {{ "SELECTED" }} @endif >Turno Día (1)</option>
      <option value="2" @if ($xActAlumnos->turMat == 2) {{ "SELECTED" }} @endif >Turno Noche (2)</option>
      <option value="3" @if ($xActAlumnos->turMat == 3) {{ "SELECTED" }} @endif >Turno Tarde (3)</option>
    </select>

    <select name="semMat" class="form-control mb-2">
      <option name="">Seleccione...</option>
        @for($i=1; $i < 7; $i++)
          <option value="{{$i}}" @if ($xActAlumnos->semMat == $i) {{ "SELECTED" }} @endif >Semestre {{$i}}</option>
        @endfor
    </select>

    <select name="estMat" class="form-control mb-2">
      <option value="">Seleccione...</option>
      <option value="0" @if ($xActAlumnos->estMat == 0) {{ "SELECTED" }} @endif >Inactivo</option>
      <option value="1" @if ($xActAlumnos->estMat == 1) {{ "SELECTED" }} @endif >Activo</option>
    </select>

    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
  </form>
 
@endsection