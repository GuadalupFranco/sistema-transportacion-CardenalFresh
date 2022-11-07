<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMercancia extends Model
{
    use HasFactory;

    protected $table = "tiposmercancias";

    public function mercancia() {
        return $this->hasMany(Mercancia::class);
    }
}
