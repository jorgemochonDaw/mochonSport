<?php

namespace App\Models\facturacion;

use App\Models\categorias\Ropa;
use App\Models\categorias\Calzado;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorias\MaterialDeportivo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carrito extends Model
{
    use HasFactory;
    protected $table = 'carritos';

    public function calzados()
    {
        return $this->belongsToMany(Calzado::class)->withPivot('anniadido');
    }

    public function materiales()
    {
        return $this->belongsToMany(MaterialDeportivo::class)->withPivot('anniadido');
    }

    public function ropas()
    {
        return $this->belongsToMany(Ropa::class)->withPivot('anniadido');
    }

    public function getTotalAttribute()
    {
        return $this->calzados->pluck('total')->sum();
    }

    public function getTotalMaterialAttribute()
    {
        return $this->materiales->pluck('total')->sum();
    }

    public function getTotalRopaAttribute()
    {
        return $this->ropas->pluck('total')->sum();
    }
}
