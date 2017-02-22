<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index');

//service Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('service','\App\Http\Controllers\ServiceController');
  Route::post('service/{id}/update','\App\Http\Controllers\ServiceController@update');
  Route::get('service/{id}/delete','\App\Http\Controllers\ServiceController@destroy');
  Route::get('service/{id}/deleteMsg','\App\Http\Controllers\ServiceController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

//social_network Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('social_network','\App\Http\Controllers\Social_networkController');
  Route::post('social_network/{id}/update','\App\Http\Controllers\Social_networkController@update');
  Route::get('social_network/{id}/delete','\App\Http\Controllers\Social_networkController@destroy');
  Route::get('social_network/{id}/deleteMsg','\App\Http\Controllers\Social_networkController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
//production_destiny Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('production_destiny','\App\Http\Controllers\Production_destinyController');
  Route::post('production_destiny/{id}/update','\App\Http\Controllers\Production_destinyController@update');
  Route::get('production_destiny/{id}/delete','\App\Http\Controllers\Production_destinyController@destroy');
  Route::get('production_destiny/{id}/deleteMsg','\App\Http\Controllers\Production_destinyController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

//water_source Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('water_source','\App\Http\Controllers\Water_sourceController');
  Route::post('water_source/{id}/update','\App\Http\Controllers\Water_sourceController@update');
  Route::get('water_source/{id}/delete','\App\Http\Controllers\Water_sourceController@destroy');
  Route::get('water_source/{id}/deleteMsg','\App\Http\Controllers\Water_sourceController@DeleteMsg');
});
//building Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('building','\App\Http\Controllers\BuildingController');
  Route::post('building/{id}/update','\App\Http\Controllers\BuildingController@update');
  Route::get('building/{id}/delete','\App\Http\Controllers\BuildingController@destroy');
  Route::get('building/{id}/deleteMsg','\App\Http\Controllers\BuildingController@DeleteMsg');
});

//transport Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('transport','\App\Http\Controllers\TransportController');
  Route::post('transport/{id}/update','\App\Http\Controllers\TransportController@update');
  Route::get('transport/{id}/delete','\App\Http\Controllers\TransportController@destroy');
  Route::get('transport/{id}/deleteMsg','\App\Http\Controllers\TransportController@DeleteMsg');
});

//facility Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('facility','\App\Http\Controllers\FacilityController');
  Route::post('facility/{id}/update','\App\Http\Controllers\FacilityController@update');
  Route::get('facility/{id}/delete','\App\Http\Controllers\FacilityController@destroy');
  Route::get('facility/{id}/deleteMsg','\App\Http\Controllers\FacilityController@DeleteMsg');
});

//machinery Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('machinery','\App\Http\Controllers\MachineryController');
  Route::post('machinery/{id}/update','\App\Http\Controllers\MachineryController@update');
  Route::get('machinery/{id}/delete','\App\Http\Controllers\MachineryController@destroy');
  Route::get('machinery/{id}/deleteMsg','\App\Http\Controllers\MachineryController@DeleteMsg');
});

//institute Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('institute','\App\Http\Controllers\InstituteController');
  Route::post('institute/{id}/update','\App\Http\Controllers\InstituteController@update');
  Route::get('institute/{id}/delete','\App\Http\Controllers\InstituteController@destroy');
  Route::get('institute/{id}/deleteMsg','\App\Http\Controllers\InstituteController@DeleteMsg');
});

//agricultural_road Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('agricultural_road','\App\Http\Controllers\Agricultural_roadController');
  Route::post('agricultural_road/{id}/update','\App\Http\Controllers\Agricultural_roadController@update');
  Route::get('agricultural_road/{id}/delete','\App\Http\Controllers\Agricultural_roadController@destroy');
  Route::get('agricultural_road/{id}/deleteMsg','\App\Http\Controllers\Agricultural_roadController@DeleteMsg');
});

//problematic Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('problematic','\App\Http\Controllers\ProblematicController');
  Route::post('problematic/{id}/update','\App\Http\Controllers\ProblematicController@update');
  Route::get('problematic/{id}/delete','\App\Http\Controllers\ProblematicController@destroy');
  Route::get('problematic/{id}/deleteMsg','\App\Http\Controllers\ProblematicController@DeleteMsg');
});

//type_document_earth Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('type_document_earth','\App\Http\Controllers\Type_document_earthController');
  Route::post('type_document_earth/{id}/update','\App\Http\Controllers\Type_document_earthController@update');
  Route::get('type_document_earth/{id}/delete','\App\Http\Controllers\Type_document_earthController@destroy');
  Route::get('type_document_earth/{id}/deleteMsg','\App\Http\Controllers\Type_document_earthController@DeleteMsg');
});

//production_unit Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('production_unit','\App\Http\Controllers\Production_unitController');
  Route::post('production_unit/{id}/update','\App\Http\Controllers\Production_unitController@update');
  Route::get('production_unit/{id}/delete','\App\Http\Controllers\Production_unitController@destroy');
  Route::get('production_unit/{id}/deleteMsg','\App\Http\Controllers\Production_unitController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});

//popular_organization Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('popular_organization','\App\Http\Controllers\Popular_organizationController');
  Route::post('popular_organization/{id}/update','\App\Http\Controllers\Popular_organizationController@update');
  Route::get('popular_organization/{id}/delete','\App\Http\Controllers\Popular_organizationController@destroy');
  Route::get('popular_organization/{id}/deleteMsg','\App\Http\Controllers\Popular_organizationController@DeleteMsg');
});

//appointment Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('appointment','\App\Http\Controllers\AppointmentController');
  Route::post('appointment/{id}/update','\App\Http\Controllers\AppointmentController@update');
  Route::get('appointment/{id}/delete','\App\Http\Controllers\AppointmentController@destroy');
  Route::get('appointment/{id}/deleteMsg','\App\Http\Controllers\AppointmentController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
//person Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('person','\App\Http\Controllers\PersonController');
  Route::post('person/{id}/update','\App\Http\Controllers\PersonController@update');
  Route::get('person/{id}/delete','\App\Http\Controllers\PersonController@destroy');
  Route::get('person/{id}/deleteMsg','\App\Http\Controllers\PersonController@DeleteMsg');
});

//certification Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('certification','\App\Http\Controllers\CertificationController');
  Route::post('certification/{id}/update','\App\Http\Controllers\CertificationController@update');
  Route::get('certification/{id}/delete','\App\Http\Controllers\CertificationController@destroy');
  Route::get('certification/{id}/deleteMsg','\App\Http\Controllers\CertificationController@DeleteMsg');
});

//type_identy_card Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('type_identy_card','\App\Http\Controllers\Type_identy_cardController');
  Route::post('type_identy_card/{id}/update','\App\Http\Controllers\Type_identy_cardController@update');
  Route::get('type_identy_card/{id}/delete','\App\Http\Controllers\Type_identy_cardController@destroy');
  Route::get('type_identy_card/{id}/deleteMsg','\App\Http\Controllers\Type_identy_cardController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});