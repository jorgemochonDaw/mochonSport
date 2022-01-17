<?php

namespace App\Http\Controllers\CategoriasControllers;

use Illuminate\Http\Request;
use App\Models\categorias\MaterialDeportivo;
use App\Http\Controllers\Controller;

class MaterialDeportivoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct() {
    //     $this->middleware(['auth','verified','onlyAdmin']);
    // }
    public function index()
    {
        return view('mochonSport.usuarios.materiales.index')->with([
            'materiales' => MaterialDeportivo::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mochonSport.admin.materiales.create', ['material' => new MaterialDeportivo()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $entrada = $request->all();
        $imagen = $request->file('pathMaterial');
        $nombre =$imagen->getClientOriginalName();
        $imagen->move('imagenes/materiales',$nombre);
        $entrada['pathMaterial'] = $nombre;
        MaterialDeportivo::create($entrada);
        return redirect()->route('materiales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ropas  $ropas
     * @return \Illuminate\Http\Response
     */
    public function show(MaterialDeportivo $material)
    {
        return view('mochonSport.usuarios.materiales.show')->with([
            'material' => $material,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ropas  $ropas
     * @return \Illuminate\Http\Response
     */
    public function edit(MaterialDeportivo $material)
    {
        return view('mochonSport.admin.materiales.edit', ['material' => $material]);
    }

    public function update(MaterialDeportivo $material)
    {
        $material->update(request()->all());
        return redirect()->route('materiales.index');
    }

    public function destroy(MaterialDeportivo $material)
    {
        $material->delete();
        return $material;
    }
}