<?php

namespace App\Models\facturacion;

use App\Models\facturacion\Factura;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cobro extends Model
{
    use HasFactory;
    protected $table = 'cobros';
    protected $fillable = [
        'cantidad',
        'cobro',
        'factura_id',
    ];

    protected $dates = [
        'cobro',
    ];
    public function factura() {
        return $this->belongsTo(Factura::class);
    }
}
