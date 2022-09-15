<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\RepuestoController;
use App\Http\Controllers\CitaController;

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
    return view('auth.login');
});

/*Route::get('/', function () {
    return view('empleado.index');
});

/*Route::get('/cliente', function () {
    return view('cliente.index');
});

Route::get('/cliente/create',[ClienteController::class,'create']);*/
//Auth::routes(['register'=>false,'reset'=>false]); Para quitar registrarse y olvido de contraseña


//CLIENTES

Route::resource('cliente', ClienteController::class)->middleware('auth'); //Puedo acceder a todas las url / Respetar la autenticacion
Auth::routes();

Route::get('/home', [ClienteController::class, 'index'])->name('home'); // Cuando el usuario escriba home lleva al CRUD 

Route::group(['middleware' => 'auth'], function () { // Si se autentica 
    Route::get('/home', [ClienteController::class, 'index'])->name('home'); // Redirecciona a index 

});
//EMPLEADOS

Route::resource('empleado', EmpleadoController::class)->middleware('auth'); //Puedo acceder a todas las url / Respetar la autenticacion
Auth::routes();
    
Route::get('/home', [EmpleadoController::class, 'index'])->name('home'); // Cuando el usuario escriba home lleva al CRUD 
    
Route::group(['middleware' => 'auth'], function () { // Si se autentica 
        Route::get('/home', [EmpleadoController::class, 'index'])->name('home'); // Redirecciona a index 
});
//VEHICULOS 

Route::resource('vehiculo', VehiculoController::class)->middleware('auth'); //Puedo acceder a todas las url / Respetar la autenticacion
Auth::routes();
    
Route::get('/home', [VehiculoController::class, 'index'])->name('home'); // Cuando el usuario escriba home lleva al CRUD 
    
Route::group(['middleware' => 'auth'], function () { // Si se autentica 
        Route::get('/home', [VehiculoController::class, 'index'])->name('home'); // Redirecciona a index 
});
//REPUESTOS 

Route::resource('repuesto', RepuestoController::class)->middleware('auth'); //Puedo acceder a todas las url / Respetar la autenticacion
Auth::routes();
    
Route::get('/home', [RepuestoController::class, 'index'])->name('home'); // Cuando el usuario escriba home lleva al CRUD 
    
Route::group(['middleware' => 'auth'], function () { // Si se autentica 
        Route::get('/home', [RepuestoController::class, 'index'])->name('home'); // Redirecciona a index 
});
//CITAS  

Route::resource('cita', CitaController::class)->middleware('auth'); //Puedo acceder a todas las url / Respetar la autenticacion
Auth::routes();
    
Route::get('/home', [CitaController::class, 'index'])->name('home'); // Cuando el usuario escriba home lleva al CRUD 
    
Route::group(['middleware' => 'auth'], function () { // Si se autentica 
        Route::get('/home', [CitaController::class, 'index'])->name('home'); // Redirecciona a index 
});
