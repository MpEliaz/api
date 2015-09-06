<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePyme;
use App\Models\Pyme;
use App\Models\Comuna;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PymeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cat = $request->get('cat');

        if($request->has('cat'))
        {
            $pymes = Pyme::select()
                ->join('tipo_pyme', 'tipo_pyme.id', '=','pymes.tipo_pyme_id')
                ->join('categorias','tipo_pyme.id_categoria','=','categorias.id')
//                ->join('geolocation','pymes.id','=','geolocation.id_pyme')
                ->where('categorias.id','=',$cat)->where("estado","=",1)
                ->select('pymes.*')
                ->get();

/*            $pymes = DB::select("select pymes.* from pymes
inner join tipo_pyme on pymes.tipo_pyme_id=tipo_pyme.id
inner join categorias on tipo_pyme.id_categoria = categorias.id
where categorias.id =".$cat);*/
        }
        else{
            $pymes = Pyme::where("estado","=",1)->get();
        }


        foreach ($pymes as $p){
            $p->geoPosicion;
            $p->comuna;
        }

        return response()->json(['status'=>'ok','data'=>$pymes], 200);
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
        $pyme->geoPosicion;

        return response()->json(array('status'=>'ok','data'=>[$pyme]),200);
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
