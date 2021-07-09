<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class RegistroMedico extends Model
{
    //

    use  SoftDeletes, Notifiable;

    protected $table = 'registros_medicos';

    public $timestamp = true;

    protected $date = [
        'deleted_at'
    ];
    
    protected $fillable = [
        'id',
        'recomendacion',
        'tercero_medico_id',
        'tercero_alumno_id',
        'factor_alergia_id',
    ];

    protected $hidden = [
        'created_at', 
        'updated_at',
    ];



    public function Estudiante(){

        return $this->belongsTo(tercero::class, 'tercero_alumno_id', 'id');
    }

    public function Medico(){

        return $this->belongsTo(tercero::class, 'tercero_medico_id', 'id');
    }
    public function TipoFactor(){

        return $this->belongsTo(elementos_lista::class, 'factor_alergia_id', 'id');
    }

}
