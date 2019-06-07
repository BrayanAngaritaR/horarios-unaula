<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriaController extends Controller
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
        $materias = DB::table('materias')->latest()->paginate(20);
        return view('admin.materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('materias')->insert([
            'name' => $request->name,
            'codigo' => $request->codigo,
        ]);
        return redirect()->back()
        ->with('success','Se ha insertado la materia');
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
    public function edit(materia $materia)
    {
        return view('admin.materias.edit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materia $materia)
    {
        $request->validate([
            'name' => 'required',
            'codigo' => 'required',
        ]);
  
        $materia->update($request->all());

        return redirect()->back()
        ->with('success','Se ha actualizado la materia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(materia $materia)
    {
        $materia->delete();
  
        return redirect()->back()
        ->with('success','Se ha eliminado el registro');
    }
}
