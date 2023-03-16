<?php

namespace App\Http\Controllers;

use App\Models\filial;
use Illuminate\Http\Request;


class FilialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // ler totos os registros
    {
        //
        $filiais= filial::all();
 
        return view('filial.index', compact('filiais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // abrir formulario para novo registro
    {
        //
        return view('filial.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // para salvar dados no banco
    {
        //
    $request->validate(
        ['filial'=>'required',
         'regional'=>'required',
         'cep'=>'required',
         'endereco'=>'required',
         'bairro'=>'required',
         'cidade'=>'required',
         'estado'=>'required'
        ]
    );

      $filial = Filial::create($request->all());
      return redirect()->route('filial.edit',$filial)->with('mensagem','Filial Cadastrada com sucesso!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Filial $filial) //visualizar um regustro com detalhes
    {
        //
        return view('filial.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Filial $filial) // para abrir a tela de edição
    {
        //
        return view('filial.edit',compact('filial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filial $filial) // para salvar a edição do registro
    {
        //
        $request->validate(
            ['filial'=>'required',
             'regional'=>'required',
             'cep'=>'required',
             'endereco'=>'required',
             'bairro'=>'required',
             'cidade'=>'required',
             'estado'=>'required'
            ]
        );
        $filial->update($request->all());
        return redirect()->route('filial.edit',$filial)->with('mensagem','Filial atualizada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filial $filial) // 
    {
        //
        $filial->delete();
        return redirect()->route('filial.index')->with('mensagem','Filial deletada com sucesso!!');
    }
}
