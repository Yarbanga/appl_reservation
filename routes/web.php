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

Route::get('/1', function () {
    return view('welcome');
});

Route::get('/', 'AccueilController@index')->name('accueil');

Route::get('/espace', 'ReservationController@membre')->name('reserve');

Route::post('/inscription', 'UserController@user_store')->name('user.store');

Route::get('/redirecte', 'UserController@apres_inscription')->name('accuse');

Route::get('/admin', 'UserController@dashboard')->name('admin');

// Route::get('/reservation', 'ReservationController@espace_reservation')->name('reservation');

Route::get('/user_list', 'UserController@users_valid')->name('user.list');

Route::get('/user_invalid', 'UserController@users_invalid')->name('user.invalid');

//validations inscrits
Route::get('/validate-inscrit/{id}', 'UserController@validate_inscrit')->name('inscrit.validate');
Route::get('/rejet-inscrit/{id}', 'UserController@rejet_inscrit')->name('inscrit.rejet');


//Route pour nos different pages
//Afficher le formulaire de creation des différents date,localisation et heure disponible par l'administrateur.
Route::get('/espace_reservation_admin','Admin_reservationController@admin_reserv')->name('admin_reserv');


//Enregistrer dans la base de donnée les differents heures creer par l'administrateur .
Route::post('/Ajouter','Admin_reservationController@store')->name('admin.store');



//on veut maintenant afficher tout les heures creer par l'admin dans la base de donnée avec la function index.
Route::get('/accueil','Admin_reservationController@index')->name('admin_index');



//route qui va s'occupé d'afficher nos liste de creéction des differents jours ,heure et date de disponibilité des salle
Route::get('/date_disponible','Admin_reservationController@create')->name('admin.create');





//Debut de la partie apprenantes quide but ici 
//achichage du formulaire
Route::get('/formulaire_apprent','ReservationController@espace_reservation')->name('apprnt_reserv');


//Route qui va nous permettre d'avoir accès d'enregistrer dans la base de donnée
Route::post('/Ajouter_apprnt','ReservationController@store')->name('apprnt_store');



//Route qui va nous permettre d'avoir accès a la liste des reservervation des apprenants
Route::get('/list','ReservationController@index')->name('apprnt_index');


//Route qui vas nous permettre d'afficher la liste des inscrits
// Route::get('/reserv_list','ReservationController@reservt_list')->name('');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');