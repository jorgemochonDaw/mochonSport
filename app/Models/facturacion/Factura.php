<?php

namespace App\Models\facturacion;

use App\Models\categorias\Ropa;
use App\Models\categorias\Calzado;
use App\Models\categorias\MaterialDeportivo;
use App\Models\facturacion\Cobro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table = 'facturas';
    protected $fillable = [
        'estado',
        'usuario_id',
    ];

    public function calzados()
    {
        return $this->belongsToMany(Calzado::class)->withPivot('anniadido');
    }

    public function materiales()
    {
        return $this->belongsToMany(Material::class)->withPivot('anniadido');
    }

    public function ropas()
    {
        return $this->belongsToMany(Ropa::class)->withPivot('anniadido');
    }

    public function cobro()
    {
        return $this->hasOne(Cobro::class);
    }

    public function usuario() {
        return $this->belongsTo(User::class,'usuario_id');
    }

    public function getTotalAttribute() {
        return $this->calzados->pluck('total')->sum();
    }
}
