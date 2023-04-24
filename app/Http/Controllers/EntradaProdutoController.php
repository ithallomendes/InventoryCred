<?php

namespace App\Http\Controllers;

use App\Models\EntradaProduto;
use Illuminate\Http\Request;
use App\Models\Fornecedor;

class EntradaProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Fornecedor $fornecedor)
    {
     $this->fornecedor = $fornecedor;
    }
    public function index()
    {
        //
        $entradaprodutos=entradaproduto::all();

        return view('entradaproduto.index', compact('entradaprodutos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedores = $this->fornecedor
        ->orderBy('fornecedor', 'ASC')->get();
        //
        return view('entradaproduto.create', ['fornecedores' => $fornecedores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $entradaproduto = EntradaProduto::create($request->all());
        return redirect()->route('entradaproduto.edit',$entradaproduto)->with('mensagem','Entrada cadastrada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EntradaProduto $entradaproduto)
    {
        //
        return view('entradaproduto.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EntradaProduto $entradaproduto)
    {
        //
        $fornecedores = $this->fornecedor->orderBy('fornecedor', 'ASC')->get();

        return view('equipamento.edit',compact('equipamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EntradaProduto $entradaproduto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EntradaProduto $entradaproduto)
    {
        //
    }
}
