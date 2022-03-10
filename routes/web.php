<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PerfilController;

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

Route::get('/', [PostagemController::class, 'index'])->name('index');

/**
 * ROTAS DE PERFIL
 * @var [type]
 */
Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil.index');
Route::get('/perfil/{nome}', [PerfilController::class, 'show'])->name('perfil.show');
Route::put('/perfil/{nome}', [PerfilController::class, 'update'])->name('perfil.update')->middleware(['auth']);

/**
 * ROTAS DE POSTAGENS
 */
Route::middleware(['auth'])->group(function() {
    // Route::get('/postagem/criar', [PostagemController::class, 'create'])->name('postagem.create');
    // Route::post('/postagem/store', [PostagemController::class, 'store'])->name('postagem.store');

    // Route::get('/postagem/{hash}/editar', [PostagemController::class, 'edit'])->name('postagem.edit');
    // Route::put('/postagem/{hash}', [PostagemController::class, 'update'])->name('postagem.update');
    // Route::delete('/postagem/{hash}', [PostagemController::class, 'destroy'])->name('postagem.destroy');
});

Route::redirect('/postagem', '/');
Route::get('/postagem/{hash}', [PostagemController::class, 'show'])->name('postagem.show');



require __DIR__.'/auth.php';
