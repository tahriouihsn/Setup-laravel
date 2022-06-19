<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'Etudiant' , 'namespace' => 'Etudiant'], function () {

    Route::get('/','EtudiantController@index')->name('home.student');


});


Route::view('/Administration','administration.administration');

//--------------  Espace Prof--------------------//
Route::group(['prefix' => 'Prof' , 'namespace' => 'Prof'], function () {

    Route::get('/','ProfController@index')->name('home.prof');

    Route::get('/listmodules','EtudiantController@listModules')->name('liste.modules');
    Route::get('/listmodules/{id}/etudiant','EtudiantController@listEtudiant')->name('etudiant.list');

    Route::get('/create-seance','ProfController@createSeance')->name('create.seance');
    Route::post('/save-seance','ProfController@saveSeance')->name('save.seance');
    Route::get('/list-seance','ProfController@listSeance')->name('list.seance');
    // Routes : Noter Absence
    Route::get('/noterabsence/{id}','ProfController@PageNoteAbsence')->name('pageAbsence');
    Route::get('/noterabsence/{id}/edit','ProfController@PageNoteAbsenceEdit')->name('pageAbsenceEdit');
    Route::post('/save-absence','ProfController@saveAbsence')->name('save.absence');
    Route::post('/edit-absence','ProfController@editAbsence')->name('edit.absence');

    // historique d'absence
    Route::get('/historique-absence','ProfController@historiqueAbsence')->name('historique.absence');

});

//--------------  Espace Prof--------------------//




