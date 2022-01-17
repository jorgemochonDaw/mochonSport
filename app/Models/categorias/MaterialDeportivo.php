<?php

namespace App\Models\categorias;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDeportivo extends Model
{
    use HasFactory;
    protected $table = 'materiales';
    protected $fillable = ['silbatos', 'banderines', 'relojes', 'tarjetas', 'precio', 'cantidadMaterial', 'stock', 'pathMaterial'];

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
