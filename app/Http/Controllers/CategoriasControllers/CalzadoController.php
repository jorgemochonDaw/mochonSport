<?php

namespace App\Http\Controllers\CategoriasControllers;

use Illuminate\Http\Request;
use App\Models\categorias\Calzado;
use App\Http\Controllers\Controller;


class CalzadoController extends Controller
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
        return view('mochonSport.usuarios.calzados.index')->with([
            'calzados' => Calzado::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mochonSport.admin.calzados.create', ['calzado' => new Calzado()]);
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
        $imagen = $request->file('pathCalzado');
        $nombre =$imagen->getClientOriginalName();
        $imagen->move('imagenes/calzados',$nombre);
        $entrada['pathCalzado'] = $nombre;
        Calzado::create($entrada);
        return redirect()->route('calzados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calzados  $calzados
     * @return \Illuminate\Http\Response
     */
    public function show(Calzado $calzado)
    {
        return view('mochonSport.usuarios.calzados.show')->with([
            'calzado' => $calzado,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calzados  $calzados
     * @return \Illuminate\Http\Response
     */
    public function edit(Calzado $calzado)
    {
        return view('mochonSport.admin.calzados.edit', ['calzado' => $calzado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calzados  $calzados
     * @return \Illuminate\Http\Response
     */
    public function update(Calzado $calzado)
    {
        $calzado->update(request()->all());
        return redirect()->route('calzados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calzados  $calzados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calzado $calzado)
    {
        $calzado->delete();
        return $calzado;
    }
}