<?php

namespace App\Http\Controllers;

use App\DisponibilidadAula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisponibilidadAulaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disponibilidad = DB::table('disponibilidad_aulas')->latest()->paginate(20);
        return view('admin.disponibilidad.index', compact('disponibilidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.disponibilidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('disponibilidad_aulas')->insert([
            'salon' => $request->salon,
            'dia' => $request->dia,
            'entrada' => $request->entrada,
            'salida' => $request->salida,
            'grupo' => $request->grupo,
            'nombre_profesor' => $request->nombre_profesor,
            'nombre_materia' => $request->nombre_materia,
            'codigo_materia' => $request->codigo_materia,
        ]);

        return redirect()->back()
        ->with('success','Se ha insertado la disponibilidad');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(DisponibilidadAula $disponibilidad)
    {
        return view('admin.disponibilidad.edit', compact('disponibilidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisponibilidadAula $disponibilidad)
    {
        $request->validate([
            'salon' => 'required',
            'dia' => 'required',
            'entrada' => 'required',
            'salida' => 'required',
            'grupo' => 'required',
            'nombre_profesor' => 'required',
            'nombre_materia' => 'required',
            'codigo_materia' => 'required',
        ]);
  
        $disponibilidad->update($request->all());

        return redirect()->back()
        ->with('success','Se ha actualizado la disponibilidad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisponibilidadAula $disponibilidad)
    {
        $disponibilidad->delete();
  
        return redirect()->back()
        ->with('success','Se ha eliminado el registro');
    }
}
