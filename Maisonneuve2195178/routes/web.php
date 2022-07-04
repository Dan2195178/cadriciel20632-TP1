<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Models\Etudiant;

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
    return view('welcome');
});


// route --- route::get(URL, Action)->Alias De URL  , get - Méthod de requête(get , post , put , delete)
// La route vers la controlle qui va afficher la liste des étudiants
route::get('etudiants', [EtudiantController::class, 'index'])->name('etudiants');// L'objectif de Alias 'name()' , c'est que l'on puisse dans le différent contexte de Serveur(localhost ou Serveur d'hébergement), en utilisant cet alias qu'on peut y être rendu à la page destinée plutôt que l'on utilise 'localhost:8000/etudiants' ou 'etudiants/{etudiant}'
route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');// ou dan la situation de rédirection ou link 'location ou <a href>' etc. on utilise l'alias situé dans 'name()'
// ajout d'un étudiant
route::get('etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create');
route::post('etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.create.post');
// Modification d'un étudiant
route::get('etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
// Supprimer un étudiant sélectionné
route::delete('etudiant/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.delete');