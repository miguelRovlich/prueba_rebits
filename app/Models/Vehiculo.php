<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $fillable = ['marca', 'modelo', 'año', 'precio'];

    protected $casts = ['id' => 'integer', 'año' => 'integer', 'precio' => 'float'];

    protected $primaryKey = 'id';

    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'dueño');
    }
}
