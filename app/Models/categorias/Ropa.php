<?php

namespace App\Models\categorias;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ropa extends Model
{
    use HasFactory;
    protected $table = 'ropas';

    protected $fillable = ['color', 'talla', 'marca', 'tipo', 'precio', 'cantidadRopa', 'stock', 'pathRopa'];

    public function carritos()
    {
        return $this->belongsToMany(Carrito::class)->withPivot('anniadido');
    }

    public function facturas()
    {
        return $this->belongsToMany(Factura::class)->withPivot('anniadido');
    }

    public function getTotalAttribute()
    {
        return $this->pivot->anniadido * $this->precio;
    }
}
