<?php

namespace App\Http\Controllers\CategoriasControllers;

use Illuminate\Http\Request;
use App\Models\categorias\Ropa;
use App\Http\Controllers\Controller;

class RopaController extends Controller
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
        return view('mochonSport.usuarios.ropas.index')->with([
            'ropas' => Ropa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mochonSport.admin.ropas.create', ['ropa' => new Ropa()]);
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
        $imagen = $request->file('pathRopa');
        $nombre =$imagen->getClientOriginalName();
        $imagen->move('imagenes/ropas',$nombre);
        $entrada['pathRopa'] = $nombre;
        Ropa::create($entrada);
        return redirect()->route('ropas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ropas  $ropas
     * @return \Illuminate\Http\Response
     */
    public function show(Ropa $ropa)
    {
        return view('mochonSport.usuarios.ropas.show')->with([
            'ropa' => $ropa,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ropas  $ropas
     * @return \Illuminate\Http\Response
     */
    public function edit(Ropa $ropa)
    {
        return view('mochonSport.admin.ropas.edit', ['ropa' => $ropa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ropas  $ropas
     * @return \Illuminate\Http\Response
     */
    public function update(Ropa $ropa)
    {
        $ropa->update(request()->all());
        return redirect()->route('ropas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ropas  $ropas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ropa $ropa)
    {
        $ropa->delete();
        return $ropa;
    }
}
