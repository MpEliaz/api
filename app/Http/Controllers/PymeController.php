<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePyme;
use App\Models\Pyme;
use App\Models\Comuna;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class PymeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response()->json(['status'=>'ok','data'=>Pyme::with('comuna')->get()], 200);
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
    public function store(CreatePyme $request)
    {
        $pyme = new Pyme($request->all());
        $pyme->save();
        return $pyme->id;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $pyme = Pyme::find($id);


        if (!$pyme)
        {
            return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra una pyme con ese código.'])],404);
        }
        $pyme->comuna;
        $pyme->imagenes;

        return response()->json(['status'=>'ok','data'=>$pyme],200);
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
