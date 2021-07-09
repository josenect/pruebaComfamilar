<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Notifications\Notifiable;

class tipos_lista extends Model
{
    //
    use  SoftDeletes, Notifiable;


    protected $table = 'tipos_listas';

    public $timestamps = true;


    protected $fillable = [ 
        'id',
        'nombre'

    ];

    protected $date = [
        'deleted_at'
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];



    public function elementos_lista_id()
    {

        return $this->hasMany('elementos_lista');
    }




}
