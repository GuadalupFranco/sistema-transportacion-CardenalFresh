<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mercancia extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'descripcion',
        'cantidad',
        'precio',
        'tipo_mercancia_id'
    ];

    public function tipo_mercancia(){
        return $this->belongsTo(TipoMercancia::class);
    }

}
