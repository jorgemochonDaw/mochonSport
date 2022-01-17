<?php

namespace App\Http\Controllers\Facturacion;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use App\Models\facturacion\Factura;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
    public function index(Factura $factura)
    {
           $pdf = PDF::loadView('pdf', [
            'pdf' => $factura,
        ]);
    
            $id = DB::select('SELECT calzado_id FROM calzado_carrito');
            for($i = 0; $i < count($id); $i++) {
                $comprado[$i] = DB::select('SELECT * FROM calzados where id ='.$id[$i]->calzado_id);
            }
            $pdf = PDF::loadView('pdf', [
                'pdf' => json_encode($comprado),
            ]);
            return $pdf->download();
    }
}
