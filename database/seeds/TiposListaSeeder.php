<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class TiposListaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('tipos_listas')->truncate();
        $this->tipoDocumento();
        $this->tipoTercero();
        $this->tipoFactoresAlergia();
    }

    public function tipoDocumento(){

        $output = new ConsoleOutput();
        $output->writeln('tipos de documentos');
        DB::table('tipos_listas')->updateOrInsert([
                'id'            => '1',
                'nombre'        => 'Tipo de documento',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s')
            ]
        );
    }


    public function tipoTercero(){

        $output = new ConsoleOutput();
        $output->writeln('tipos de terceros');
        DB::table('tipos_listas')->updateOrInsert([
                'id'            => '2',
                'nombre'        => 'Tipo de Tercero',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s') 
            ]
        );
    }

    public function tipoFactoresAlergia(){

        $output = new ConsoleOutput();
        $output->writeln('tipos de factores alergia');
        DB::table('tipos_listas')->updateOrInsert([
                'id'            => '3',
                'nombre'        => 'Tipo de Alergia',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s') 
            ]
        );
    }

}
