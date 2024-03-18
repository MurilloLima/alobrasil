<?php

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

Route::get('/', [HomeController::class, 'index'])->name('home.pages.index');

// admin

Route::get('/dashboard', function () {
    return view('admin.pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //categorias
    Route::get('admin/categoria/', [CategoriaController::class, 'index'])->name('admin.categoria.index');
    Route::get('admin/categoria/create', [CategoriaController::class, 'create'])->name('admin.categoria.create');
    Route::post('admin/categoria/store', [CategoriaController::class, 'store'])->name('admin.categoria.store');
    Route::get('admin/categoria/delete/{id}', [CategoriaController::class, 'destroy'])->name('admin.pages.categoria.destroy');

     //slider
     Route::get('admin/slider/', [SliderController::class, 'index'])->name('admin.slider.index');
     Route::get('admin/slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
     Route::post('admin/slider/store', [SliderController::class, 'store'])->name('admin.slider.store');
 
     // imoveis
     Route::get('admin/imoveis/', [ImoveiController::class, 'index'])->name('admin.imoveis.index');
     Route::get('admin/imoveis/create', [ImoveiController::class, 'create'])->name('admin.imoveis.create');
     Route::post('admin/imoveis/store/', [ImoveiController::class, 'store'])->name('admin.imoveis.store');
     Route::get('admin/imoveis/delete/{id}', [ImoveiController::class, 'destroy'])->name('admin.pages.imoveis.destroy')->middleware(['auth']);;
 
     //CONTATOS
     Route::get('admin/contatos/', [ContatoController::class, 'index'])->name('admin.pages.contatos.index');
 

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
