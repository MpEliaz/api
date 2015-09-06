<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $eventos = Evento::all();

        foreach ($eventos as $e){
            $e->comuna;
        }

        return response()->json(['status'=>'ok','data'=>$eventos], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $evento = Evento::find($id);

        if(!$evento){
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra una evento con ese id.'])],404);
        }
        else{
            $evento->comuna;
            return response()->json(array('status'=>'ok','data'=>[$evento]),200);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
