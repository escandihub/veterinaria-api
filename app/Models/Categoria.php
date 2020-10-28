<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre', 'descripcion'
    ];
    protected $hidden = ['id'];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
    public function scopeBuscar($query,$nombre)
    {
        return $query->where('nombre',$nombre);
    }
}
