<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OperacionAduanalController;
use App\Http\Controllers\CargaSueltaController;
use App\Http\Controllers\ContenedorController;
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

Route::view('/', 'welcome');

// Ruta general para el dashboard
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif (auth()->user()->role === 'user') {
        return redirect()->route('user.dashboard');
    }
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

Route::resource('operaciones', OperacionAduanalController::class)->middleware('auth');

Route::get('operaciones/{operacion}/cargas_sueltas/create', [CargaSueltaController::class, 'create'])->name('cargas_sueltas.create');
Route::post('operaciones/{operacion}/cargas_sueltas', [CargaSueltaController::class, 'store'])->name('cargas_sueltas.store');
Route::get('cargas_sueltas/{cargaSuelta}', [CargaSueltaController::class, 'show'])->name('cargas_sueltas.show');
Route::get('cargas_sueltas/{cargaSuelta}/edit', [CargaSueltaController::class, 'edit'])->name('cargas_sueltas.edit');
Route::put('cargas_sueltas/{cargaSuelta}', [CargaSueltaController::class, 'update'])->name('cargas_sueltas.update');
Route::delete('cargas_sueltas/{cargaSuelta}', [CargaSueltaController::class, 'destroy'])->name('cargas_sueltas.destroy');

Route::get('operaciones/{operacion}/contenedores/create', [ContenedorController::class, 'create'])->name('contenedores.create');
Route::post('operaciones/{operacion}/contenedores', [ContenedorController::class, 'store'])->name('contenedores.store');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';