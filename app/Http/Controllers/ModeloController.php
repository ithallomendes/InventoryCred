<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Models\Marca;
use Illuminate\Http\Request;




class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }

    public function index()
    {
        //
        $modelos= Modelo::all();
        return view('modelo.index',compact('modelos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas = $this->marca->orderBy('marca', 'ASC')->get();
        return view('modelo.create', ['marcas' => $marcas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //
         $request->validate(
            ['modelo'=>'required']
        );

        $modelo = Modelo::create($request->all());
        return redirect()->route('modelo.edit',$modelo)->with('mensagem','Modelo cadastrado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Modelo $modelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelo $modelo)
    {
        //
        $marcas = $this->marca->orderBy('marca', 'ASC')->get();
        return view('modelo.edit',compact('modelo', 'marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        //
        //
        $request->validate(
            ['modelo'=>'required']
        );
        $modelo->update($request->all());
        return redirect()->route('modelo.edit',$modelo)->with('mensagem','Modelo atualizado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelo $modelo)
    {
        //
        $modelo->delete();
        return redirect()->route('modelo.index')->with('mensagem','Modelo deletado com sucesso!!');
    }
}
