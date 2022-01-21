<?php
 
use App\Http\Controllers\{
    HomeController,
    AdminController,
    ClienteController,
    ProdutoController,
    VendaController,
};
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'home']);

    Route::get('/clientes', [ClienteController::class, 'index']);
    Route::get('/clientes/new', [ClienteController::class, 'create']);
    Route::PUT('/clientes/new', [ClienteController::class, 'store']);
    Route::get('/clientes/edit/{cliente}', [ClienteController::class, 'edit']);
    Route::PATCH('/clientes/edit/{cliente}', [ClienteController::class, 'update']);
    Route::DELETE('/clientes/{cliente}', [ClienteController::class, 'destroy']);
    
    Route::get('/admins', [AdminController::class, 'index']);
    Route::get('/admins/new', [AdminController::class, 'create']);
    Route::PUT('/admins/new', [AdminController::class, 'store']);
    Route::get('/admins/edit/{user}', [AdminController::class, 'edit']);
    Route::PATCH('/admins/edit/{user}', [AdminController::class, 'update']);
    Route::DELETE('/admins/{user}', [AdminController::class, 'destroy']);

    Route::get('/produtos', [ProdutoController::class, 'index']);
    Route::get('/produtos/new', [ProdutoController::class, 'create']);
    Route::PUT('/produtos/new', [ProdutoController::class, 'store']);
    Route::get('/produtos/edit/{produto}', [ProdutoController::class, 'edit']);
    Route::PATCH('/produtos/edit/{produto}', [ProdutoController::class, 'update']);
    Route::DELETE('/produtos/{produto}', [ProdutoController::class, 'destroy']);

    Route::get('/vendas', [VendaController::class, 'index']);
    Route::get('/vendas/new', [VendaController::class, 'create']);
    Route::get('/vendas/api/getCliente/{cliente_id}', [VendaController::class, 'getCliente']);
    Route::get('/vendas/api/getProduto/{product_id}', [VendaController::class, 'getProduto']);
    Route::PUT('/vendas/new', [VendaController::class, 'store']);
    Route::get('/vendas/pdf/{venda}', [VendaController::class, 'exportPDF']);
});

require __DIR__.'/auth.php';
