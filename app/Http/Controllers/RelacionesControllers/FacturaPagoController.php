<?php
namespace App\Http\Controllers\RelacionesControllers;

use App\Http\Controllers\Controller;
use App\Http\Services\CarritoService;
use App\Models\facturacion\Factura;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class FacturaPagoController extends Controller
{
    public $carritoService;

    public function __construct(CarritoService $carritoService)
    {
        $this->carritoService = $carritoService;
        // $this->middleware('auth');
    }

    public function create(Factura $factura)
    {
        return view('mochonSport.cobro.pago.create')->with(['factura' => $factura]);
    }

    public function store(Factura $factura)
    {
        $this->carritoService->getFromCookie()->calzados()->detach();
        $factura->cobro()->create([
            'cantidad' => $factura->total,
            'pago' => now(),
        ]);
        $factura->estado = 'pagado';
        $factura->save();
        return 
        // $pdf->stream()
        redirect()
            ->route('home')
            ->with("mensaje", "Gracias,hemos recibido tu pago,{$factura->total}€");
    }
}
