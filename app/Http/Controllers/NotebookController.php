<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Modelo;


class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Marca $marca, Modelo $modelo)
    {
     $this->marca = $marca;
     $this->modelo = $modelo;
    }

    public function index()
    {
        //
        $notebooks=Notebook::all();
 
        return view('notebook.index', compact('notebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas = $this->marca
        ->orderBy('marca', 'ASC')->get();

        $modelos = $this->modelo
        ->orderBy('modelo', 'ASC')->get();

        return view('notebook.create', ['marcas' => $marcas, 'modelos' => $modelos]);
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
            ['nome_colaborador'=>'required']
        );

        $notebook = Notebook::create($request->all());
        return redirect()->route('notebook.edit',$notebook)->with('mensagem','Notebook cadastrado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Notebook $notebook)
    {
        //
        $marcas = $this->marca->orderBy('marca', 'ASC')->get();
        $modelos = $this->modelo->orderBy('modelo', 'ASC')->get();
        return view('notebook.edit',compact('notebook', 'marcas','modelos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notebook $notebook, )
    {
        //
        $request->validate(
            ['nome_colaborador'=>'required']
        );

        $notebook->update($request->all());
        return redirect()->route('notebook.edit',$notebook)->with('mensagem','Modelo atualizado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notebook $notebook)
    {
        //
        $notebook->delete();
        return redirect()->route('notebook.index')->with('mensagem','Notebook deletado com sucesso!!');
    }
}
