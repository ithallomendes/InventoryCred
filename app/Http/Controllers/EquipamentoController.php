<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\SubCategoria;
use App\Models\Marca;
use App\Models\Modelo;


class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct(Categoria $categoria, SubCategoria $subcategoria, Marca $marca, Modelo $modelo)
     {
      $this->categoria = $categoria;
      $this->subcategoria = $subcategoria;
      $this->marca = $marca;
      $this->modelo = $modelo;
     }
    public function index()
    {
        //
       
        $equipamentos= equipamento::all();
        return view('equipamento.index', compact('equipamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategorias = $this->subcategoria
        ->orderBy('subcategoria', 'ASC')->get();

        $categorias = $this->categoria
        ->orderBy('categoria', 'ASC')->get();

        $marcas = $this->marca
        ->orderBy('marca', 'ASC')->get();

        $modelos = $this->modelo
        ->orderBy('modelo', 'ASC')->get();

        return view('equipamento.create', ['categorias' => $categorias,'marcas' => $marcas, 'modelos' => $modelos,'subcategorias' => $subcategorias]);
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
            ['descricao'=>'required',
             'estoque'=>'required',
             'estoquemin'=>'required',
             'valor'=>'required',
            ]
        );
    
          $equipamento = Equipamento::create($request->all());
          return redirect()->route('equipamento.edit',$equipamento)->with('mensagem','Equipamento Cadastrado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        //
        return view('equipamento.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Equipamento $equipamento)
    {
        //
        $categorias = $this->categoria->orderBy('categoria', 'ASC')->get();
        $marcas = $this->marca->orderBy('marca', 'ASC')->get();
        $modelos = $this->modelo->orderBy('modelo', 'ASC')->get();

        return view('equipamento.edit',compact('equipamento','categorias','marcas','modelos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        //
        $request->validate(
            ['estoque'=>'required',
             'estoquemin'=>'required',
             'valor'=>'required',
            ]
        );
        $equipamento->update($request->all());
        return redirect()->route('equipamento.edit',$equipamento)->with('mensagem','Equipamento atualizado com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {
        //
        $equipamento->delete();
        return redirect()->route('equipamento.index')->with('mensagem','Equipamento deletado com sucesso!!');
    }
}
