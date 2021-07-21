<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PacientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\LoginController;
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


//Login//


Route::get('/index',[UsuariosController::class,'index'])->name('index');
Route::get('/',[PacientesController::class,'index'])->name('index');



//------------------DATATABLES--------------------------------------//
Route::name('usuarios')->get('/controlusuarios',[UsuariosController::class,'index']);
Route::name('editar')->get('editar/{id}',[UsuariosController::class,'edit']);
Route::name('store')->post('store/',[UsuariosController::class,'store']);
Route::name('destroy')->delete('destroy/{id}',[UsuariosController::class,'destroy']);


///////////////paCIENTES///////////
Route::name('pacientes')->get('/controlpacientes',[PacientesController::class,'index']);
Route::name('editar')->get('editar/{id}',[PacientesController::class,'edit']);
Route::name('store')->post('store/',[PacientesController::class,'store']);
Route::name('destroy')->delete('destroy/{id}',[PacientesController::class,'destroy']);

//---------------------------------CARRITO-----------
Route::name('productos')->get('productos',[ProductosController::class,'index']);
Route::name('carrito')->get('carrito',[ProductosController::class,'carrito']);
Route::name('agregar')->get('agregar/{id}',[ProductosController::class,'agregar']);
Route::name('actualizar')->patch('actualizar',[ProductosController::class,'actualizar']);
Route::name('borrar')->delete('borrar/',[ProductosController::class,'borrar']);


//-------------------PDF--------------------------------//
Route::name('pdfusuarios')->get('pdfusuarios',[UsuariosController::class,'PdfUsuarios']);
Route::name('usuariospdf')->get('usuariospdf',[UsuariosController::class,'index']);

Route::name('pdfpacientes')->get('pdfpacientes',[PacientesController::class,'PdfPacientes']);
Route::name('usuariospdf')->get('usuariospdf',[PacientesController::class,'index']);


////----------------------------EXCEL--------------------//
Route::name('export')->get('export',[UsuariosController::class,'export']);
Route::name('import')->post('import',[UsuariosController::class,'import']);

Route::name('export')->get('export',[PacientesController::class,'export']);
Route::name('import')->post('import',[PacientesController::class,'import']);


Route::name('qrcode')->get('qrcode',[PacientesController::class, 'QrCode']);
Route::name('escanerqr')->get('escanerqr',[PacientesController::class, 'EscanerQr']);

