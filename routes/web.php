<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('aluguel/', [HomeController::class, 'aluguel'])->name('home.aluguel.index');
Route::get('vendas/', [HomeController::class, 'vendas'])->name('home.vendas.index');
Route::get('contatos/', [HomeController::class, 'contatos'])->name('home.contatos.index');
Route::post('contatos/store', [ContatoController::class, 'store'])->name('home.contatos.store');
//view imoveis
Route::get('imovel/{slug}', [HomeController::class, 'imovel'])->name('home.imovel.view');

// admin
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
