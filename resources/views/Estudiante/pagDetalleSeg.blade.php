@extends('pagPlantilla')

@section('titulo')
  <h1>Pagina detalle seguimiento</h1>
@endsection

@section('seccion')
  <h3>Detalle de seguimiento</h3>
  <p>id:                  {{ $xDetAluSeg->id}}</p>
  <p>Código:              {{ $xDetAluSeg->idEst}}</p>
  <p>Trabajo actual:      {{ $xDetAluSeg->traAct}}</p>
  <p>Oficio actual:       {{ $xDetAluSeg->ofiAct}}</p>
  <p>Grado de satisfacción: {{ $xDetAluSeg->satEst}}</p>
  <p>Fecha seguimiento:     {{ $xDetAluSeg->fecSeg}}</p>
  <p>Estado de seguimiento: {{ $xDetAluSeg->estSeg}}</p>
@endsection