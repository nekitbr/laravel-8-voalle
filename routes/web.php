<?php
 
use App\Http\Controllers\{
    HomeController,
    AdminController,
    ClienteController,
    ProdutoController,
    VendaController,
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// pdf de venda
Route::get('/vendas/pdf/{venda}', [VendaController::class, 'exportPDF']);

Route::middleware(['auth', 'verified'])->group(function () {
    // home
    Route::get('/home', [HomeController::class, 'home']);

    // clientes (crud)
    Route::get('/clientes', [ClienteController::class, 'index']);
    Route::get('/clientes/new', [ClienteController::class, 'create']);
    Route::PUT('/clientes/new', [ClienteController::class, 'store']);
    Route::get('/clientes/edit/{cliente}', [ClienteController::class, 'edit']);
    Route::PATCH('/clientes/edit/{cliente}', [ClienteController::class, 'update']);
    Route::DELETE('/clientes/{cliente}', [ClienteController::class, 'destroy']);
    
    // UI admin
    Route::get('/admins', [AdminController::class, 'index']);
    Route::get('/admins/new', [AdminController::class, 'create']);
    Route::PUT('/admins/new', [AdminController::class, 'store']);
    Route::get('/admins/edit/{user}', [AdminController::class, 'edit']);
    Route::PATCH('/admins/edit/{user}', [AdminController::class, 'update']);
    Route::DELETE('/admins/{user}', [AdminController::class, 'destroy']);

    // produtos
    Route::get('/produtos', [ProdutoController::class, 'index']);
    Route::get('/produtos/new', [ProdutoController::class, 'create']);
    Route::PUT('/produtos/new', [ProdutoController::class, 'store']);
    Route::get('/produtos/edit/{produto}', [ProdutoController::class, 'edit']);
    Route::PATCH('/produtos/edit/{produto}', [ProdutoController::class, 'update']);
    Route::DELETE('/produtos/{produto}', [ProdutoController::class, 'destroy']);

    // vendas
    Route::get('/vendas', [VendaController::class, 'index']);
    Route::get('/vendas/new', [VendaController::class, 'create']);
    Route::get('/vendas/api/getCliente/{cliente_id}', [VendaController::class, 'getCliente']);
    Route::get('/vendas/api/getProduto/{product_id}', [VendaController::class, 'getProduto']);
    Route::PUT('/vendas/new', [VendaController::class, 'store']);
});


require __DIR__.'/auth.php';
