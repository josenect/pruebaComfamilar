<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros_medicos', function (Blueprint $table) {
            $table->id();
            $table->text('recomendacion');
            $table->bigInteger('tercero_medico_id');
            $table->bigInteger('tercero_alumno_id'); 
            $table->bigInteger('factor_alergia_id');
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
        Schema::dropIfExists('registros_medicos');
    }
}
