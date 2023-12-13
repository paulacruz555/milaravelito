@extends('pagPlantilla')

@section('titulo')
  <h1>Pagina detalle estudiante</h1>
@endsection

@section('seccion')
  <h3>Detalle estudiante</h3>
  <p>id:                  {{ $xDetAlumnos->id}}</p>
  <p>Código:              {{ $xDetAlumnos->codEst}}</p>
  <p>Apellidos y Nombres: {{ $xDetAlumnos->apeEst}}, {{ $xDetAlumnos->nomEst}}</p>
  <p>Fecha de nacimiento: {{ $xDetAlumnos->fnaEst}}</p>
  <p>Turno:               {{ $xDetAlumnos->turEst}}</p>
  <p>Semestre:            {{ $xDetAlumnos->semEst}}</p>
  <p>Estado de matricula: {{ $xDetAlumnos->estEst}}</p>
@endsection