<?php

namespace App\Http\Controllers\RelacionesControllers;

use App\Models\categorias\Calzado;
use App\Models\facturacion\Carrito;
use App\Http\Controllers\Controller;
use App\Http\Services\CarritoService;

class CalzadosCarritosController extends Controller
{
    public $carritoService;

    public function __construct(CarritoService $carritoService)
    {
        $this->carritoService = $carritoService;
    }

    public function store(Calzado $calzado)
    {
        $carrito = $this->carritoService->getFromCookieOrCreate();
        $anniadido = $carrito->calzados()
        ->find($calzado->id)
        ->pivot->anniadido ?? 0;
        $carrito->calzados()->syncWithoutDetaching([
            $calzado->id => ['anniadido' => $anniadido + 1],
        ]);

        $carrito->touch();
        $cookie = $this->carritoService->makeCookie($carrito);
        return redirect()->back()->cookie($cookie);
    }

    public function destroy(Calzado $calzado,Carrito $carrito) {
        $carrito->calzados()->detach($calzado->id);
        $carrito->touch();
        $cookie = $this->carritoService->makeCookie($carrito);
        return redirect()->back()->cookie($cookie);
    }
}
