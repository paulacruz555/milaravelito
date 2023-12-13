<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Seguimiento;

class PagesController extends Controller
{

    public function fnIndex(){
        return view('welcome');
    }


    public function fnRegistrar(Request $request) {

        $request -> validate([
            'codEst'=>'required',
            'nomEst'=>'required',
            'apeEst'=>'required',
            'fnaEst'=>'required',
            'turMat'=>'required',
            'semMat'=>'required',
            'estMat'=>'required'
        ]);

        $nuevoEstudiante = new Estudiante;

        $nuevoEstudiante->codEst = $request->codEst;
        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;

        $nuevoEstudiante->save();  

        return back()->with('msj', 'Se registro con éxito...');
    }

    public function fnRegistrarSeg(Request $request) {

        $request -> validate([
            'idEst'=>'required',
            'traAct'=>'required',
            'ofiAct'=>'required',
            'satEst'=>'required',
            'fecSeg'=>'required',
            'estSeg'=>'required'
        ]);

        
        $newEstSeg = new Seguimiento;

        $newEstSeg->idEst = $request->idEst;
        $newEstSeg->traAct = $request->traAct;
        $newEstSeg->ofiAct = $request->ofiAct;
        $newEstSeg->satEst = $request->satEst;
        $newEstSeg->fecSeg = $request->fecSeg;
        $newEstSeg->estSeg = $request->estSeg;

        $newEstSeg->save();  

        return back()->with('msj', 'Se registro SEGUIMIENTO con éxito...');
    }


    public function fnLista(){
        $xAlumnos = Estudiante::all();
        return view('pagLista', compact('xAlumnos'));
    }

    public function fnEstDetalle($id){
        $xDetAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }

    public function fnSeguimiento(){
        $xAluSeg = Seguimiento::all();
        return view('pagListaSeguimiento', compact('xAluSeg'));
    }

    public function fnEstDetalleSeg($id){
        $xDetAluSeg = Seguimiento::findOrFail($id);
        return view('Estudiante.pagDetalleSeg', compact('xDetAluSeg'));
    }


    public function fnEstActualizar($id){
        $xActAlumnos = Estudiante::findOrFail($id);
        return view('Estudiante.pagActualizar', compact('xActAlumnos'));
    }

    public function fnUpdate(Request $request, $id){
        
        $xUpdateAlumnos = Estudiante::findOrFail($id);

        $xUpdateAlumnos->codEst = $request->codEst;
        $xUpdateAlumnos->nomEst = $request->nomEst;
        $xUpdateAlumnos->apeEst = $request->apeEst;
        $xUpdateAlumnos->fnaEst = $request->fnaEst;
        $xUpdateAlumnos->turMat = $request->turMat;
        $xUpdateAlumnos->semMat = $request->semMat;
        $xUpdateAlumnos->estMat = $request->estMat;

        $xUpdateAlumnos->save();

        return back()->with('msj', 'Se actualizo con éxito...');
    }

    public function fnEstActualizarSeg($id){
        $xActAluSeg = Seguimiento::findOrFail($id);
        return view('Estudiante.pagActualizarSeg', compact('xActAluSeg'));
    }

    public function fnUpdateSeg(Request $request, $id){


        $xUpdateAluSeg = Seguimiento::findOrFail($id);

        $xUpdateAluSeg->idEst = $request->idEst;
        $xUpdateAluSeg->traAct = $request->traAct;
        $xUpdateAluSeg->ofiAct = $request->ofiAct;
        $xUpdateAluSeg->satEst = $request->satEst;
        $xUpdateAluSeg->fecSeg = $request->fecSeg;
        $xUpdateAluSeg->estSeg = $request->estSeg;

        $xUpdateAluSeg->save(); 

        return back()->with('msj', 'Se actualizo SEGUIMIENTO con éxito...');
    }




    public function fnEliminar($id){
        $deleteAlumno = Estudiante::findOrFail($id);
        $deleteAlumno->delete();

        return back()->with('msj','Se elimino con éxito...');
    }

    public function fnEliminarSeg($id){
        $deleteAlumno = Seguimiento::findOrFail($id);
        $deleteAlumno->delete();

        return back()->with('msj','Se elimino SEGUIMIENTO con éxito...');
    }
    


    public function fnGaleria($numero=0){
        $valor = $numero;
        $otro  = 25;

        return view('pagGaleria', compact('valor', 'otro'));
    }
}
