<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores=fornecedor::all();
        return view('fornecedor.index', compact('fornecedores'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fornecedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['fornecedor'=>'required',
             'cep'=>'required',
             'endereco'=>'required',
             'bairro'=>'required',
             'cidade'=>'required',
             'estado'=>'required',
             'telefone'=>'required'
            ]
        );

        $fornecedor = Fornecedor::create($request->all());
        return redirect()->route('fornecedor.edit',$fornecedor)->with('mensagem','Fornecedor Cadastrado com Sucesso!!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedor $fornecedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornecedor $fornecedor)
    {
        //
        return view('fornecedor.edit',compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        //
        $request->validate(
            ['fornecedor'=>'required',
             'cep'=>'required',
             'endereco'=>'required',
             'bairro'=>'required',
             'cidade'=>'required',
             'estado'=>'required',
             'telefone'=>'required'
            ]
        );
        $fornecedor->update($request->all());
        return redirect()->route('fornecedor.edit',$fornecedor)->with('mensagem','Fornecedor atualizado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedor $fornecedor)
    {
        //
        $fornecedor->delete();
        return redirect()->route('fornecedor.index')->with('mensagem','Fornecedor deletado com sucesso!!');
    }
}
