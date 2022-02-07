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
Route::get('/pesquisa', [PostagemController::class, 'search'])->name('postagem.search');

Route::get('/postagem', [PostagemController::class, 'show'])->name('postagem.show'); // post=e8578e0a630782c6cb7a475c4b9cb5e68f8906ae

Route::middleware(['auth'])->group(function() {
    Route::get('/postagem/criar', [PostagemController::class, 'create'])->name('postagem.create');
    Route::post('/postagem', [PostagemController::class, 'store'])->name('postagem.store');
    Route::get('/postagem/{id}/editar', [PostagemController::class, 'edit'])->name('postagem.edit');
    Route::put('/postagem/{id}', [PostagemController::class, 'update'])->name('postagem.update');
    Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');
});

Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil.index');
Route::get('/perfil/{nome}', [PerfilController::class, 'show'])->name('perfil.show');
Route::put('/perfil/{nome}', [PerfilController::class, 'update'])->name('perfil.update')->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
