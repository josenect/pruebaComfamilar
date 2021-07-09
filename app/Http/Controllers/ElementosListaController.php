<?php

namespace App\Http\Controllers;

use App\elementos_lista;
use Illuminate\Http\Request;

class ElementosListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elementos_lista = elementos_lista::all();
        
        return $elementos_lista ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\elementos_lista  $elementos_lista
     * @return \Illuminate\Http\Response
     */
    public function show(elementos_lista $elementos_lista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\elementos_lista  $elementos_lista
     * @return \Illuminate\Http\Response
     */
    public function edit(elementos_lista $elementos_lista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\elementos_lista  $elementos_lista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, elementos_lista $elementos_lista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\elementos_lista  $elementos_lista
     * @return \Illuminate\Http\Response
     */
    public function destroy(elementos_lista $elementos_lista)
    {
        //
    }
}
