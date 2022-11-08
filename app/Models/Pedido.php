<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public $timestamps = false;

    
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function mercancia(){
        return $this->belongsTo(Mercancia::class);
    }
}
