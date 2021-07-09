<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class ElementosListaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        DB::table('elementos_listas')->truncate();
        $this->TipoDocumento();
        $this->TipoTercero();
        $this->tipoFactoresAlergia();
        $this->Medicos();
        $this->Acudientes();
        $this->Estudiantes();
        $this->RegistrosMedicos();
        
        
    }


    public function TipoDocumento(){
        $output = new ConsoleOutput();
        $output->writeln('tipo de indentificación:' );
            $tipoLista = 1;
            DB::table('elementos_listas')->updateOrInsert([
                'id' => 1,
                'nombre' => 'Registro civil de nacimiento',
                'tipos_lista_id'=> $tipoLista,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
            DB::table('elementos_listas')->updateOrInsert([
                'id' => 2,
                'nombre' => 'Tarjeta de identidad',
                'tipos_lista_id'=> $tipoLista,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
            DB::table('elementos_listas')->updateOrInsert([
                'id' => 3,
                'nombre' => 'Cédula de ciudadania',
                'tipos_lista_id'=> $tipoLista,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
            DB::table('elementos_listas')->updateOrInsert([
                'id' => 4,
                'nombre' => 'Cédula de extranjería',
                'tipos_lista_id'=> $tipoLista,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            );
        $output->writeln('creados o actulizados ');
        }




        public function TipoTercero(){
            $output = new ConsoleOutput();
            $output->writeln('tipo de tercero:' );
                $tipoLista = 2;
                DB::table('elementos_listas')->updateOrInsert([
                    'id' => 11,
                    'nombre' => 'Acudiente',
                    'tipos_lista_id'=> $tipoLista,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                    ]
                );
                DB::table('elementos_listas')->updateOrInsert([
                    'id' => 12,
                    'nombre' => 'Estudiante',
                    'tipos_lista_id'=> $tipoLista,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                    ]
                );
                DB::table('elementos_listas')->updateOrInsert([
                    'id' => 13,
                    'nombre' => 'Medico',
                    'tipos_lista_id'=> $tipoLista,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                    ]
                );
            
                          
               
    
                $output->writeln('creados o actulizados ');
            }

            public function tipoFactoresAlergia(){
                $output = new ConsoleOutput();
                $output->writeln('tipo de Alergia:' );
                    $tipoLista = 3;
                    DB::table('elementos_listas')->updateOrInsert([
                        'id' => 21,
                        'nombre' => 'Fiebre del heno',
                        'tipos_lista_id'=> $tipoLista,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                        ]
                    );
                    DB::table('elementos_listas')->updateOrInsert([
                        'id' => 22,
                        'nombre' => 'Alergia alimentaria ',
                        'tipos_lista_id'=> $tipoLista,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                        ]
                    );

                    DB::table('elementos_listas')->updateOrInsert([
                        'id' => 23,
                        'nombre' => 'Alergia por una picadura de insecto ',
                        'tipos_lista_id'=> $tipoLista,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                        ]
                    );

                    DB::table('elementos_listas')->updateOrInsert([
                        'id' => 24,
                        'nombre' => 'Alergia a un medicamento',
                        'tipos_lista_id'=> $tipoLista,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s')
                        ]
                    );

                  

        
                    $output->writeln('creados o actulizados ');
                }

                public function Estudiantes(){
                    $output = new ConsoleOutput();
                    $output->writeln('Estudiantes:' );
                        $tipoLista = 1;
                        $tipoListaEstu =12;
                        DB::table('terceros')->updateOrInsert([
                            'id' => 101,
                            'tipo_identificacion_id' => $tipoLista,
                            'numero_identificacion'  => 10101010,
                            'tipo_tercero_id'        => $tipoListaEstu, 
                            'nombre1'                => 'Jose',
                            'nombre2'                => 'Efrey',
                            'apellido1'              => 'Rodrgiez',
                            'apellido2'              => 'Bonilla',
                            'nacimiento'             => date('Y-m-d H:i:s'),
                            'created_at'             => date('Y-m-d H:i:s'),
                            'updated_at'             => date('Y-m-d H:i:s')
                            ]
                        );

                        DB::table('terceros')->updateOrInsert([
                            'id' => 102,
                            'tipo_identificacion_id' => $tipoLista,
                            'numero_identificacion'  => 20202020,
                            'tipo_tercero_id'        => $tipoListaEstu, 
                            'nombre1'                => 'Carlos',
                            'nombre2'                => 'Andres',
                            'apellido1'              => 'Perez',
                            'apellido2'              => 'Bonilla',
                            'nacimiento'             => date('Y-m-d H:i:s'),
                            'created_at'             => date('Y-m-d H:i:s'),
                            'updated_at'             => date('Y-m-d H:i:s')
                            ]
                        );

                        DB::table('terceros')->updateOrInsert([
                            'id' => 103,
                            'tipo_identificacion_id' => $tipoLista,
                            'numero_identificacion'  => 20202020,
                            'tipo_tercero_id'        => $tipoListaEstu, 
                            'nombre1'                => 'Julian',
                            'nombre2'                => 'Camilo',
                            'apellido1'              => 'Medina',
                            'apellido2'              => 'Lopez',
                            'nacimiento'             => date('Y-m-d H:i:s'),
                            'created_at'             => date('Y-m-d H:i:s'),
                            'updated_at'             => date('Y-m-d H:i:s')
                            ]
                        );
                      
    
            
                        $output->writeln('creados o actulizados ');
                    }

                    public function Acudientes(){
                        $output = new ConsoleOutput();
                        $output->writeln('Acudientes:' );
                            $tipoListaCC = 3;
                            $tipoListaAcu =11;
                            DB::table('terceros')->updateOrInsert([
                                'id' => 104,
                                'tipo_identificacion_id' => $tipoListaCC,
                                'numero_identificacion'  => 12457896,
                                'tipo_tercero_id'        => $tipoListaAcu, 
                                'nombre1'                => 'Hernando',
                                'nombre2'                => '',
                                'apellido1'              => 'Botero',
                                'apellido2'              => 'Bonilla',
                                'tercero_id'             => 1,
                                'nacimiento'             => date('Y-m-d H:i:s'),
                                'created_at'             => date('Y-m-d H:i:s'),
                                'updated_at'             => date('Y-m-d H:i:s')
                                ]
                            );
    
                            DB::table('terceros')->updateOrInsert([
                                'id' => 105,
                                'tipo_identificacion_id' => $tipoListaCC,
                                'numero_identificacion'  => 47851248,
                                'tipo_tercero_id'        => $tipoListaAcu, 
                                'nombre1'                => 'Daniela',
                                'nombre2'                => 'Carolina',
                                'apellido1'              => 'Artunduaga',
                                'apellido2'              => 'Bonilla',
                                'tercero_id'             => 2,
                                'nacimiento'             => date('Y-m-d H:i:s'),
                                'created_at'             => date('Y-m-d H:i:s'),
                                'updated_at'             => date('Y-m-d H:i:s')
                                ]
                            );
    
                            DB::table('terceros')->updateOrInsert([
                                'id' => 106,
                                'tipo_identificacion_id' => $tipoListaCC,
                                'numero_identificacion'  => 79548632,
                                'tipo_tercero_id'        => $tipoListaAcu, 
                                'nombre1'                => 'Daniel',
                                'nombre2'                => '',
                                'apellido1'              => 'Medina',
                                'apellido2'              => 'Lopez',
                                'tercero_id'             => 3,
                                'nacimiento'             => date('Y-m-d H:i:s'),
                                'created_at'             => date('Y-m-d H:i:s'),
                                'updated_at'             => date('Y-m-d H:i:s')
                                ]
                            );
                          
        
                
                            $output->writeln('creados o actulizados ');
                        }


                        public function Medicos(){
                            $output = new ConsoleOutput();
                            $output->writeln('Medicos:' );
                                $tipoListaCC = 3;
                                $tipoListaMed =13;
                                DB::table('terceros')->updateOrInsert([
                                    'id' => 107,
                                    'tipo_identificacion_id' => $tipoListaCC,
                                    'numero_identificacion'  => 48752,
                                    'tipo_tercero_id'        => $tipoListaMed, 
                                    'nombre1'                => 'Alejandra',
                                    'nombre2'                => '',
                                    'apellido1'              => 'Medina',
                                    'apellido2'              => '',
                                    'nacimiento'             => date('Y-m-d H:i:s'),
                                    'created_at'             => date('Y-m-d H:i:s'),
                                    'updated_at'             => date('Y-m-d H:i:s')
                                    ]
                                );
        
                                DB::table('terceros')->updateOrInsert([
                                    'id' => 108,
                                    'tipo_identificacion_id' => $tipoListaCC,
                                    'numero_identificacion'  => 14785,
                                    'tipo_tercero_id'        => $tipoListaMed, 
                                    'nombre1'                => 'Andres',
                                    'nombre2'                => '',
                                    'apellido1'              => 'Portes',
                                    'apellido2'              => '',
                                    'nacimiento'             => date('Y-m-d H:i:s'),
                                    'created_at'             => date('Y-m-d H:i:s'),
                                    'updated_at'             => date('Y-m-d H:i:s')
                                    ]
                                );
        
                                DB::table('terceros')->updateOrInsert([
                                    'id' => 109,
                                    'tipo_identificacion_id' => $tipoListaCC,
                                    'numero_identificacion'  => 47851,
                                    'tipo_tercero_id'        => $tipoListaMed, 
                                    'nombre1'                => 'Efret',
                                    'nombre2'                => '',
                                    'apellido1'              => 'Morales',
                                    'apellido2'              => '',
                                    'nacimiento'             => date('Y-m-d H:i:s'),
                                    'created_at'             => date('Y-m-d H:i:s'),
                                    'updated_at'             => date('Y-m-d H:i:s')
                                    ]
                                );
                              
            
                    
                                $output->writeln('creados o actulizados ');
                            }
    

                            public function RegistrosMedicos(){
                                $output = new ConsoleOutput();
                                $output->writeln('Medicos:' );
                                    $tipoListaCC = 3;
                                    $tipoListaMed =13;
                                    DB::table('registros_medicos')->updateOrInsert([
                                        'id' => 30,
                                        'recomendacion'          => 'no consumer mani por su alergia',
                                        'tercero_medico_id'      => 106,
                                        'tercero_alumno_id'      => 101, 
                                        'factor_alergia_id'      => 22,
                                        'created_at'             => date('Y-m-d H:i:s'),
                                        'updated_at'             => date('Y-m-d H:i:s')
                                        ]
                                    );

                                    DB::table('registros_medicos')->updateOrInsert([
                                        'id' => 31,
                                        'recomendacion'          => 'no consumer brocoli por su alergia',
                                        'tercero_medico_id'      => 106,
                                        'tercero_alumno_id'      => 101, 
                                        'factor_alergia_id'      => 22,
                                        'created_at'             => date('Y-m-d H:i:s'),
                                        'updated_at'             => date('Y-m-d H:i:s')
                                        ]
                                    );
            
                                    DB::table('registros_medicos')->updateOrInsert([
                                        'id' => 32,
                                        'recomendacion'          => 'no Aplicar diclofenaco por su alergia',
                                        'tercero_medico_id'      => 108,
                                        'tercero_alumno_id'      => 103, 
                                        'factor_alergia_id'      => 23,
                                        'created_at'             => date('Y-m-d H:i:s'),
                                        'updated_at'             => date('Y-m-d H:i:s')
                                        ]
                                    );
                
                        
                                    $output->writeln('creados o actulizados ');
                                }
        

}
