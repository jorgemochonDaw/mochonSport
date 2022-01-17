<?php

namespace App\Models\categorias;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Calzado extends Model
{
    use HasFactory;
    protected $table = 'calzados';

    protected $fillable = ['color', 'talla', 'marca', 'precio', 'cantidadCalzado', 'stock','pathCalzado'];

    public function carritos() {
        return $this->belongsToMany(Carrito::class)->withPivot('anniadido');
    }

    public function facturas() {
        return $this->belongsToMany(Factura::class)->withPivot('anniadido');
    }

    public function getTotalAttribute() {
        return $this->pivot->anniadido * $this->precio;
    }
}
