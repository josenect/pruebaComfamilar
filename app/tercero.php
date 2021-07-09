<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class tercero extends Model
{
    //
    use  SoftDeletes, Notifiable;


    protected $table = 'terceros';

    public $timestamp = true;

    protected $date = [
        'deleted_at'
    ];
    
    protected $fillable = [
        'id',
        'tipo_identificacion_id',
        'numero_identificacion',
        'tipo_tercero_id',
        'nombre1',
        'nombre2',
        'apellido1',
        'apellido2',
        'nacimiento',
        'tercero_id',

    ];

    protected $hidden = [
        'created_at', 
        'updated_at',
    ];

    public function tipo_identificacion(){

        return $this->belongsTo(elementos_lista::class, 'tipo_identificacion_id', 'id');
       
    }


    public function tipo_tercero(){

        return $this->belongsTo(elementos_lista::class, 'tipo_tercero_id', 'id');
    }

    public function Estudiante(){

        return $this->belongsTo(tercero::class, 'tercero_id', 'id');
    }



}
