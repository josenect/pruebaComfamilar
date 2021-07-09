<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Notifications\Notifiable;


class elementos_lista extends Model
{
    //
    use  SoftDeletes, Notifiable;




    protected $table = 'elementos_listas';

    public $timestamps = true;

    

    protected $fillable = [
        'id',
        'nombre',
        'tipos_lista_id',
        'elemento_lista_id'
 
    ];

    protected $date = [
        'deleted_at'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];


    //relaciones

    public function tipos_listas(){

        return $this->belongsTo('tipos_lista_id', 'id');
    }

    public function Tercero()
    {

        return $this->hasMany('tercero');
    }


}
