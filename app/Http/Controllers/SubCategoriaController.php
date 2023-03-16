<?php

namespace App\Http\Controllers;

use App\Models\SubCategoria;
use App\Models\categoria;

use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }

    public function index()
    {    
        
      $subcategorias=SubCategoria::all();
      return view('subcategoria.index',compact('subcategorias'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categorias = $this->categoria->orderBy('categoria', 'ASC')->get();
        return view('subcategoria.create', ['categorias' => $categorias]);
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
            ['subcategoria'=>'required']
        );
        $subcategoria = SubCategoria::create($request->all());
        return redirect()->route('subcategoria.edit',$subcategoria)->with('mensagem','SubCategoria cadastrada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategoria $subcategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategoria $subcategoria)
    {
        //
        $categorias = $this->categoria->orderBy('categoria', 'ASC')->get();
        return view('subcategoria.edit',compact('subcategoria', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategoria $subcategoria)
    {
        $request->validate(
            ['subcategoria'=>'required']
        );
        $subcategoria->update($request->all());
        return redirect()->route('subcategoria.edit',$subcategoria)->with('mensagem','SubCategoria atualizada com sucesso!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategoria $subcategoria)
    {
        $subcategoria->delete();
        return redirect()->route('subcategoria.index')->with('mensagem','SubCategoria deletada com sucesso!!');
    }
}
