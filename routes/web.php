<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\GoogleController;
// use App\Http\Controllers\RacineController;
use App\Http\Controllers\accueilController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\CliniqueController;
use App\Http\Controllers\AppointmentController;

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

Route::get('/',                     [AccueilController::class, 'index'])->name('accueil');
Route::get('/clinique',             [CliniqueController::class, 'clinique'])->name('clinique');
Route::get('/boutique',             [BoutiqueController::class, 'boutique']);
Route::get('/rendez-vous',          [AppointmentController::class, 'importAppointment'])->name('appointment'); // listing des rendez-vous dispo
Route::get('/rendez-vous/{id}',     [AppointmentController::class, 'showAppointment'])->name('appointmentSelect');// affiche une view du rendez-vous choisit
Route::post('/rendez-vous/{id}',    [AppointmentController::class, 'create'])->name('appointmentSelect');



Auth::routes();

//Admin
Route::get('/admin/adminGestion',       [AdminController::class, 'index'])->middleware('admin')->name('admin.adminGestion'); //le middleware créer la restriction de connexion
Route::get('/admin/rendez-vous/create', [AdminController::class, 'create'])->middleware('admin')->name('admin.create'); //route qui permet de récuperer le form de création rendez-vous
Route::post('/admin/rendez-vous/store', [AdminController::class, 'store'])->middleware('admin')->name('admin.store'); // route pour envoyer la requête en methode POST a la BDD(nouvel enregistrement)
Route::delete('/admin/rendez-vous/{appointment}/delete',[AdminController::class, 'delete'])->middleware('admin')->name('admin.delete');
