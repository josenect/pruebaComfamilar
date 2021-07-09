<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTercerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terceros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tipo_identificacion_id');       
            $table->integer('numero_identificacion');
            $table->bigInteger('tipo_tercero_id');         
            $table->text('nombre1');
            $table->text('nombre2')->nullable();
            $table->text('apellido1');
            $table->text('apellido2')->nullable(); 
            $table->date('nacimiento');
            $table->bigInteger('tercero_id')->nullable(); 
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terceros');
    }
}
