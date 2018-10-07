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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/about', 'AboutController@about');


Route::get('/contact', 'ContactController@contact');


// Expertise

Route::get('/it', 'ItController@it');

Route::get('/mobile', 'MobileController@mobile');

Route::get('/business', 'BusinessController@business');

Route::get('/migration', 'MigrationController@migration');

Route::get('/cyber', 'CyberController@cyber');

// Solutions

Route::get('/bomt', 'BomtController@bomt');

Route::get('/saas', 'SaasController@saas');

Route::get('/pharma', 'PharmaController@pharma');

Route::get('/cloud', 'CloudController@cloud');

Route::get('/training', 'TrainingController@training');

Route::get('/idm', 'IdmController@idm');

Route::get('/cloudsec', 'CloudsecController@cloudsec');

Route::get('/property', 'PropertyController@property');

Route::get('/inventory', 'InventoryController@inventory');

Route::get('/quality', 'QualityController@quality');

Route::get('/businesspro', 'BusinessproController@businesspro');

// Products

Route::get('/erp', 'ErpController@erp');

Route::get('/data', 'DataController@data');

Route::get('/cloudm', 'CloudmController@cloudm');

Route::get('/cobank', 'CobankController@cobank');

Route::get('/event', 'EventController@event');

Route::get('/event', 'EventController@event');

Route::get('/medical', 'MedicalController@medical');

Route::get('/eschool', 'EschoolController@eschool');

Route::get('/saving', 'SavingController@saving');

Route::get('/cor', 'CorController@cor');

Route::get('/billing', 'BillingController@billing');

// Mechanical

Route::get('/auto', 'AutoController@auto');

Route::get('/catia', 'CatiaController@catia');

Route::get('/pro', 'ProController@pro');

Route::get('/solid', 'SolidController@solid');

Route::get('/production', 'ProductionController@production');

Route::get('/qualityeng', 'QualityengController@qualityeng');
