<?php
namespace App\Http\Services;


use App\Models\facturacion\Carrito;
use Illuminate\Support\Facades\Cookie;

class CarritoService
{
    protected $cookieCarrito;
    protected $caducidadCookie;

    public function __construct()
    {
        $this->cookieCarrito = 'carrito';
        $this->caducidadCookie = 30000;
    }

    public function getFromCookie()
    {
        $carritoId = Cookie::get($this->cookieCarrito);
        $carrito = Carrito::find($carritoId);
        return $carrito;
    }

    public function getFromCookieOrCreate()
    {
        $carrito = $this->getFromCookie();
        return $carrito ?? Carrito::create();
    }

    public function makeCookie(Carrito $carrito)
    {
        return Cookie::make($this->cookieCarrito, $carrito->id,  $this->caducidadCookie);
    }

    public function contadorCarritoCalzado()
    {
        $carrito = $this->getFromCookie();
        if ($carrito != null) {
            return $carrito->calzados->pluck('pivot.anniadido')->sum();
        }
        return 0;
    }
}
