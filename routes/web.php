<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApifController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EntradaProdutoController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\FilialController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\NotebookController;
use App\Http\Controllers\SubCategoriaController;
use App\Models\EntradaProduto;
use App\Models\SubCategoria;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('filial', FilialController::class)->names('filial');
Route::resource('fornecedor', FornecedorController::class)->names('fornecedor');
Route::resource('categoria', CategoriaController::class, ['parameters' => ['categoria' => 'categoria']]);
Route::resource('subcategoria', SubCategoriaController::class, ['parameters' => ['subcategoria' => 'subcategoria']]);
Route::resource('equipamento', EquipamentoController::class, ['parameters' => ['equipamento' => 'equipamento']]);
Route::resource('marca', MarcaController::class, ['parameters' => ['marca' => 'marca']]);
Route::resource('modelo', ModeloController::class, ['parameters' => ['modelo' => 'modelo']]);
Route::resource('entradaproduto', EntradaProdutoController::class, ['parameters' => ['entradaproduto' => 'entradaproduto']]);
Route::resource('notebook', NotebookController::class, ['parameters' => ['notebook' => 'notebook']]);

?>
