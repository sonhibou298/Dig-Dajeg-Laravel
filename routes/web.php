<?php

use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProcheController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

//Route::get('/auth', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('home');
//})->middleware(['auth'])->name('dashboard');
//
//require __DIR__.'/auth.php';
//
//
Route::get('/', function () {
    return view('accueil');
});




/*--------------------------------------------------------------------------------------
                                    Route Role
---------------------------------------------------------------------------------------*/
Route::get('roles', [RoleController::class, 'index'])->name('listRoles');
Route::post('role', [RoleController::class, 'store'])->name('addRole');
Route::delete('role/{id}', [RoleController::class, 'destroy'])->name('deleteRole');
Route::put('role/{id}', [RoleController::class, 'update'])->name('updateRole');

/*--------------------------------------------------------------------------------------
                                    Route User
---------------------------------------------------------------------------------------*/
//Route::post('loginUser', [UserController::class, 'login'])->name('loginUser');
//Route::get('loginUser', function (){
//    return view('loginUser');
//})->name('loginUser');
Route::get('users', [UserController::class, 'index'])->name('listUsers');

Route::post('user', [UserController::class, 'store'])->name('addUser');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('deleteUser');
Route::put('user/{id}', [UserController::class, 'update'])->name('updateUser');
Route::get('user/{id}', [UserController::class, 'show'])->name('showUser');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('users/search/{prenom}', [UserController::class, 'search'])->name('search');
});
Route::get('deconnexion', [UserController::class, 'deconnexion'])->name('deconnexion');

/*--------------------------------------------------------------------------------------
                                    Route Medecin
---------------------------------------------------------------------------------------*/
Route::get('homeMedecin', [MedecinController::class, 'statistique'])->middleware(['auth'])->middleware('disable_back')->name('homeMedecin');

Route::get('medecins', [MedecinController::class, 'index'])->name('listMedecins');
Route::put('medecin/{id}', [UserController::class, 'update'])->name('updateProfilMedecin');
Route::put('medecin/{id}', [MedecinController::class, 'update'])->name('updateServiceMedecin');
Route::delete('medecin/{id}', [MedecinController::class, 'destroy'])->name('deleteMedecin');
Route::get('medecin/{id}', [MedecinController::class, 'show'])->name('infoMedecin');
Route::post('medecin', [MedecinController::class, 'store'])->name('addMedecin');
Route::get('test', [MedecinController::class, 'infoMedecin'])->name('test');
Route::get('search', [MedecinController::class, 'search'])->name('search');

/*--------------------------------------------------------------------------------------
                                    Route Patient
---------------------------------------------------------------------------------------*/
Route::get('loginPatient', function (){
    return view('loginUser');
})->name('loginPatient');

Route::get('/inscription', function (){
    return view('patient.inscription');
})->name('inscription');

Route::get('homePatient', function (){

    return view('patient.home');
})->middleware(['auth'])->middleware('disable_back')->name('homePatient');



Route::get('patients', [PatientController::class, 'index'])->name('listPatients');
Route::put('patient/{id}', [UserController::class, 'update'])->name('updatePatient');
Route::get('patient/{id}', [UserController::class, 'show'])->name('infoPatient');
Route::delete('patient/{id}', [UserController::class, 'destroy'])->name('deletePatient');
Route::post('patient', [PatientController::class, 'store'])->name('addPatient');
Route::get('getId', [PatientController::class, 'getIdLastUser']);
Route::get('mesRendezvous', [PatientController::class, 'mesRendezvous'])->name('mesRendezvous');
Route::get('medecinFavoris', [PatientController::class, 'medecinFavoris'])->name('medecinFavoris');
Route::get('patient/compte', [PatientController::class, 'monCompte'])->name('patientCompte');
/*--------------------------------------------------------------------------------------
                                    Route Proche
---------------------------------------------------------------------------------------*/
Route::get('proches', [ProcheController::class, 'index'])->name('listProche');
Route::get('proche/{id}', [ProcheController::class, 'show'])->name('infoProche');
Route::get('proche/{id}', [ProcheController::class, 'destroy'])->name('deleteProche');
Route::put('proche/{id}', [ProcheController::class, 'update'])->name('updateProche');
Route::post('proche', [ProcheController::class, 'store'])->name('addProche');

/*--------------------------------------------------------------------------------------
                                    Route Service
---------------------------------------------------------------------------------------*/
Route::get('services', [ServiceController::class, 'index'])->name('listServices');
Route::get('service/{id}', [ServiceController::class, 'show'])->name('infoService');
Route::get('service/{id}', [ServiceController::class, 'destroy'])->name('deleteService');
Route::put('service/{id}', [ServiceController::class, 'update'])->name('updateService');
Route::post('service', [ServiceController::class, 'store'])->name('addService');

/*--------------------------------------------------------------------------------------
                                    Route Tarif
---------------------------------------------------------------------------------------*/
Route::get('tarifs', [TarifController::class, 'index'])->name('listTarifs');
Route::get('tarif/{id}', [TarifController::class, 'show'])->name('infoTarif');
Route::get('tarif/{id}', [TarifController::class, 'destroy'])->name('deleteTarif');
Route::put('tarif/{id}', [TarifController::class, 'update'])->name('updateTarif');
Route::post('tarif', [TarifController::class, 'store'])->name('addTarif');

/*--------------------------------------------------------------------------------------
                                    Route Rendez-vous
---------------------------------------------------------------------------------------*/
Route::get('rendezVous', [RendezvousController::class, 'index'])->name('rendezVous');
Route::post('rendezVous', [RendezvousController::class, 'store'])->name('addRendezVous');
Route::get('getMedecinId/{id}', [RendezvousController::class, 'getMedecinId'])->name('getMedecinId');
Route::get('rendezVousUpdate/{id}', [RendezvousController::class, 'show'])->name('infoRendezVous');
Route::get('rendezVousDelete/{id}', [RendezvousController::class, 'destroy'])->name('deleteRendezVous');
Route::put('rendezVous/{id}', [RendezvousController::class, 'update'])->name('updateRendezVous');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
