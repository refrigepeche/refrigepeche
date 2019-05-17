<?php
use App\Http\Controllers\catalogueController;
use App\User;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\BONS;
use App\Exports\ListExport;
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
/* ---------------------------------  ACCUEIL  ------------------------------------*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','HomeController@index')->name('home');


/* -------------------  AFFICHAGE FAMILLE - CATALOGUE  ----------------------------*/
Route::get('/famille', 'CatalogueController@famille');
Route::get('/famille/{i}', 'CatalogueController@familleproduct');
Route::get('/catalog1/{i}', 'CatalogueController@catalog1');
Route::get('/catalog2/{i}', 'CatalogueController@catalog2');
Route::get('/catalogue/{groupe}', 'CatalogueController@view');
Route::get('/catalogue/{groupe}/{reference}', 'CatalogueController@interact');
Route::get('/catalogue/{groupe}/{reference}/{image}.png', 'CatalogueController@interact2');


/* ---------------------------------  PANIER  -------------------------------------*/
Route::get('/panier','PanierController@index')->name('panier');
Route::post('/panier','PanierController@send');

/* ---------------------------------  VALIDATION  --------------------------------*/
Route::get('/validation', 'validationController@index');


/* ---------------------------------  FORMULAIRE  --------------------------------*/
Route::get('/formulaire/formbon', 'FormBonController@index');
Route::post('/formulaire/formbon', 'FormBonController@send');

/* ---------------------------------  User  --------------------------------*/
Route::post('/user/insertion', 'UserInsertionController@send');
Route::get('/user/insertion', 'UserInsertionController@index');

/* ---------------------------------  Ministock  --------------------------------*/
Route::get('/ministock', function () {
    return view('ministock');
})->name('ministock');
Route::post('/ministock', 'MinistockController@send');