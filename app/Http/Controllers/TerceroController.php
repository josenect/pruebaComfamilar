<?php

namespace App\Http\Controllers;
use App\elementos_lista;
use App\tercero;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TerceroController extends Controller
{
    
    public function index()
    {    
        
       
    $terceros = DB::table('terceros')->whereNull('terceros.deleted_at')
    ->join('elementos_listas as elementos1', 'terceros.tipo_identificacion_id', '=', 'elementos1.id')
    ->join('elementos_listas as elementos2', 'terceros.tipo_tercero_id', '=', 'elementos2.id')
    ->leftJoin('terceros as alumno', 'terceros.tercero_id', '=', 'alumno.id')
    ->where('terceros.tipo_tercero_id',11) 
    ->select('terceros.id as id',
    DB::raw("CONCAT(terceros.nombre1,' ',terceros.nombre2,' ',terceros.apellido1, ' ', terceros.apellido2 )AS nombre"),
      'elementos1.nombre as tipo_identificacion_tercero',
      'terceros.numero_identificacion as identificacion',
      'elementos2.nombre as tipo_tercero',
      DB::raw("CONCAT(alumno.nombre1,' ',alumno.nombre2,' ',alumno.apellido1, ' ',alumno.apellido2 )AS alumno")

    )->get();
    
    return DataTables::of($terceros)->toJson(); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_documento = elementos_lista::where('tipos_lista_id',1)->get();
        $listaTercero = elementos_lista::where('tipos_lista_id',2)->get();
        $alumnos=tercero::where('tipo_tercero_id',12)->get();

    
        $response =[
            'status'    =>  'succes',
            'code'  =>  200,
            'listas'=>[

                'tipo_documento' => $tipo_documento ,
                'listaTercero'  =>  $listaTercero,
                'alumnos' => $alumnos
            ]
   
        
   
        ];  
        return response()->json($response);
    }

  
    //  */
    public function store(Request $request, $id = null)
    {
        //
    
        if (is_null($id)){
            
            $tercero = new tercero();
            $mensaje = 'Registro creado exitosamente ';


        }else{
            
            $tercero = tercero::find($id);
            $mensaje = 'Registro actualizado exitosamente';
            
        }   
        
        $tercero->forceFill($request->all())->save();


        $response= [
            'status'    => 'succes',
            'message'   => $mensaje,
        ];

        return response()->json($response);
       
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (is_null($id) || $id == 0) {
            $response = [
                'status' => 'success',
                'code'   => 200,
                 'listas' =>  ((object)self::create()->original)->listas,
            ];
        } else {

            $tercero = tercero::withoutTrashed()->with('tipo_identificacion', 'tipo_tercero', 'Estudiante')
            ->where('id', $id)->first();
            if (!empty($tercero)) {
                $response = [
                    'status'        => 'success',
                    'data'          => $tercero,
                    'listas'        => ((object)self::create()->original),
                ];
            } else {
                $response = [
                    'status'     => 'error',
                    'message'    => 'Registro no encontrado',
                ];
            }
        }

        return response()->json($response);

 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tercero  $tercero
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return self::store($request, $id); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tercero  $tercero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $tercero=tercero::find($id);
        $tercero->delete();
        
        return "destroy";
    }
}
