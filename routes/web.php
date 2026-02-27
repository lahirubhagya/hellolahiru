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


//------------------------**************************************--------------------------------------------------------
//-----------------START------------------------All routes with main pages----------------------------------------------
Route::get('/', function () {return view('layouts/Landing');})->name('Landing');
Route::get('/ContactMe', function () {return view('layouts/ContactMe');})->name('ContactMe');
Route::post('/Contact', 'ContactController@store')->name('appContact');
Route::get('/MyBlog', function () {return view('layouts/MyBlog');})->name('MyBlog');
Route::get('/MyPortfolio', function () {return view('layouts/MyPortfolio');})->name('MyPortfolio');
//------------------------**************************************--------------------------------------------------------
//-----------------END------------------------All routes with main pages------------------------------------------------


//------------------------**************************************--------------------------------------------------------
//-----------------START------------------------All routes with portfolio pages-----------------------------------------
Route::get('/SriLankaRailwaysReservationApp', function () {return view('layouts/Portfolio/SriLankaRailwaysReservationApp');})->name('SriLankaRailwaysReservationApp');
Route::get('/LaugfsApp', function () {return view('layouts/Portfolio/LaugfsApp');})->name('LaugfsApp');
Route::get('/DengueApp', function () {return view('layouts/Portfolio/DengueApp');})->name('DengueApp');
Route::get('/ActedApp', function () {return view('layouts/Portfolio/ActedApp');})->name('ActedApp');
Route::get('/GeoBizzWebPrototype', function () {return view('layouts/Portfolio/GeoBizzWebPrototype');})->name('GeoBizzWebPrototype');
Route::get('/MultilacApplication', function () {return view('layouts/Portfolio/MultilacApplication');})->name('MultilacApplication');
Route::get('/LecoApplication', function () {return view('layouts/Portfolio/LecoApplication');})->name('LecoApplication');
Route::get('/SFAApplication', function () {return view('layouts/Portfolio/SFAApplication');})->name('SFAApplication');
Route::get('/GeoBizzWeb', function () {return view('layouts/Portfolio/GeoBizzWeb');})->name('GeoBizzWeb');
Route::get('/GeoBizzSystem', function () {return view('layouts/Portfolio/GeoBizzSystem');})->name('GeoBizzSystem');
Route::get('/GeoBizzConsole', function () {return view('layouts/Portfolio/GeoBizzConsole');})->name('GeoBizzConsole');
Route::get('/SFAFrontEndApplication', function () {return view('layouts/Portfolio/SFAFrontEndApplication');})->name('SFAFrontEndApplication');
Route::get('/NextportWeb', function () {return view('layouts/Portfolio/NextportWeb');})->name('NextportWeb');
Route::get('/PRCWeb', function () {return view('layouts/Portfolio/PRCWeb');})->name('PRCWeb');
Route::get('/CelataTechWeb', function () {return view('layouts/Portfolio/CelataTechWeb');})->name('CelataTechWeb');
Route::get('/MetDepartmentWeb', function () {return view('layouts/Portfolio/MetDepartmentWeb');})->name('MetDepartmentWeb');
Route::get('/HitechSoldierWeb', function () {return view('layouts/Portfolio/HitechSoldierWeb');})->name('HitechSoldierWeb');
Route::get('/CargillsWeb', function () {return view('layouts/Portfolio/CargillsWeb');})->name('CargillsWeb');
Route::get('/LECOGeoMappingSystem', function () {return view('layouts/Portfolio/LECOGeoMappingSystem');})->name('LECOGeoMappingSystem');
Route::get('/CSIAPWeb', function () {return view('layouts/Portfolio/CSIAPWeb');})->name('CSIAPWeb');
//------------------------**************************************--------------------------------------------------------
//-----------------END------------------------All routes with portfolio pages-------------------------------------------


