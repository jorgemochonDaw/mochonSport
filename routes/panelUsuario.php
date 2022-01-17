<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Facturacion\CarritoController;
use App\Http\Controllers\Facturacion\FacturaController;
use App\Http\Controllers\Facturacion\PdfController;
use App\Http\Controllers\CategoriasControllers\RopaController;
use App\Http\Controllers\CategoriasControllers\CalzadoController;
use App\Http\Controllers\RelacionesControllers\CalzadosCarritosController;
use App\Http\Controllers\RelacionesControllers\FacturaPagoController;
use App\Http\Controllers\CategoriasControllers\MaterialDeportivoController;

Route::resource('calzados', CalzadoController::class)->only(['index', 'show']);
Route::resource('ropas', RopaController::class)->only(['index', 'show']);
Route::resource('materiales', MaterialDeportivoController::class, ['parameters' => ['materiales' => 'material']])->only(['index', 'show']);

Route::resource('calzados.carritos', CalzadosCarritosController::class)->only(['store', 'destroy']);
Route::resource('carrito', CarritoController::class)->only(['index']);
// Route::resource('factura', FacturaController::class)->only(['create','store']);
// Route::resource('facturas.pagos', FacturasPagosController::class)->only(['create','store']);
Route::resource('factura', FacturaController::class)->only(['create', 'store']);

Route::resource('factura.pago', FacturaPagoController::class)->only(['create', 'store']);
Route::resource('ropas.carritos', CalzadosCarritosController::class)->only(['store', 'destroy']);
Route::resource('materiales.carritos', CalzadosCarritosController::class)->only(['store', 'destroy']);


Route::get('pdf',[PdfController::class,'index'])->name('pdf');