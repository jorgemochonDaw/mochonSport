<?php

namespace App\Http\Controllers\Facturacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\CarritoService;

class FacturaController extends Controller
{
    public $carritoService;

    public function __construct(CarritoService $carritoService)
    {
        $this->carritoService = $carritoService;
        // $this->middleware('auth');
    }

    public function create()
    {
        $carrito = $this->carritoService->getFromCookie();
        if (!isset($carrito) || $carrito->calzados->isEmpty()) {
            return redirect()
                ->back()
                ->withErrors('Carrito vacío');
        }
        return view('mochonSport.cobro.factura.create')->with(['carrito' => $carrito]);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $factura = $user->facturas()->create([
            'status' => 'pendiente',
        ]);
        $carrito = $this->carritoService->getFromCookie();
        $carritoCalzadoConQuantity = $carrito
            ->calzados
            ->mapWithKeys(function ($calzado) {
                $elemento[$calzado->id] = ['anniadido' => $calzado->pivot->anniadido];
                return $elemento;
            });
        $factura->calzados()->attach($carritoCalzadoConQuantity->toArray());
        return redirect()->route('factura.pago.create', ['factura' => $factura]);
    }
}
