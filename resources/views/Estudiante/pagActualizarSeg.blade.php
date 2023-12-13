@extends('pagPlantilla')

@section('titulo')
  <h1 class="display-4">Pagina actualizar seguimiento</h1>
@endsection

@section('seccion')

  @if(session('msj'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('msj') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
    </div>
  @endif

  <form action="{{ route('Estudiante.xUpdateSeg', $xActAluSeg->id) }}" method="POST">
    @method('PUT')
    @csrf

    @error('idEst')
      <div class="alert alert-danger">
        El idEst es requerido,
      </div>
    @enderror

    @error('ofiAct')
      <div class="alert alert-danger">
        El oficio actual es requerido,
      </div>
    @enderror

    <input type="text" name="idEst" value="{{ $xActAluSeg->idEst }}" placeholder="Código" class="form-control mb-2">
    <select name="traAct" class="form-control mb-2">
      <option value="">Seleccione... trabaja actualmente?...</option>
      <option value="SI" @if ($xActAluSeg->traAct == 'SI') {{ "SELECTED" }} @endif >Si trabajo</option>
      <option value="NO" @if ($xActAluSeg->traAct == 'NO') {{ "SELECTED" }} @endif >No trabajo</option>
    </select>

    <select name="ofiAct" class="form-control mb-2">
      <option value="">Seleccione...oficio actual?</option>
      <option value="Contabilidad" @if ($xActAluSeg->ofiAct == 'Contabilidad') {{ "SELECTED" }} @endif >Contabilidad</option>
      <option value="Administración" @if ($xActAluSeg->ofiAct == 'Administración') {{ "SELECTED" }} @endif >Administración</option>
      <option value="Mecanica automotriz" @if ($xActAluSeg->ofiAct == 'Mecanica automotriz') {{ "SELECTED" }} @endif >Mecanica automotriz</option>
      <option value="Enfermeria" @if ($xActAluSeg->ofiAct == 'Enfermeria') {{ "SELECTED" }} @endif >Enfermeria</option>
      <option value="Computación e informatica" @if ($xActAluSeg->ofiAct == 'Computación e informatica') {{ "SELECTED" }} @endif >Computación e informatica</option>

    </select>
    
    <select name="satEst" class="form-control mb-2">
      <option value="" >Seleccione satisfacción del egresado...</option>
      <option value="0" @if ($xActAluSeg->satEst == '0') {{ "SELECTED" }} @endif >No estoy satisfecho</option>
      <option value="1" @if ($xActAluSeg->satEst == '1') {{ "SELECTED" }} @endif >Regular</option>
      <option value="2" @if ($xActAluSeg->satEst == '2') {{ "SELECTED" }} @endif >Bueno</option>
      <option value="3" @if ($xActAluSeg->satEst == '3') {{ "SELECTED" }} @endif >Muy bueno</option>
    </select>

    <input type="date" name="fecSeg" value="{{ old('fecSeg') }}" placeholder="Fecha Nac." class="form-control mb-2">
    
    <select name="estSeg" class="form-control mb-2">
      <option value="">Seleccione... estado de matricula?</option>
      <option value="0" @if ($xActAluSeg->estSeg == '0') {{ "SELECTED" }} @endif >Inactivo</option>
      <option value="1" @if ($xActAluSeg->estSeg == '1') {{ "SELECTED" }} @endif >Activo</option>
    </select>

    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
  </form>
 
@endsection