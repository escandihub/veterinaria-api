<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'dia',
        'hora_inicio',
        'hora_fin',
    ];
    protected $hidden = [
        'id'
    ];

    protected $appends = [
        // 'intervalos'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    
    public function getIntervalosAttribute()
    {
        // $horarios = 'Lunes'->get(); 
        // $intervalos = array()
        // foreach($horarios as $horario)
        // {            
            // $intervalos[] = ;
        // }
        // return $intervalos;
    }


}
