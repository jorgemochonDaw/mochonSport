<?php

namespace App\Http\Controllers\Facturacion;

use App\Http\Controllers\Controller;
use App\Http\Services\CarritoService;

class CarritoController extends Controller
{
    public $carritoService;

    public function __construct(CarritoService $carritoService)
    {
        $this->carritoService = $carritoService;
    }

    public function index()
    {
        return view('mochonSport.cobro.carrito.index')->with([
            'carrito' => $this->carritoService->getFromCookieOrCreate(),
        ]);
    }
}
