<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/map', function () { return Inertia::render('Test/MapsTest', []); });

## PUBLIC PAGES ##
Route::get('/index', function () { return Inertia::render('Index', []); });
Route::get('/about', function () { return Inertia::render('Public/About', []); });
Route::get('/services', function () { return Inertia::render('Public/Services', []); });
Route::get('/docs', function () { return Inertia::render('Public/Documentation', []); });
Route::get('/contact', function () { return Inertia::render('Public/Contact', []); });

## AUTHN PAGES ##
Route::get('/login', function () { return Inertia::render('Authn/Login', []); });
Route::get('/register', function () { return Inertia::render('Authn/Register', []); });

## DASHBOARD PAGES ##
Route::get('/playground', function () { return Inertia::render('Dashboard/Index', []); });

## USER FUNCTION ROUTES ##
Route::get('/Users', 'UsersController@index')->name('users.index');
Route::get('/Users/Create', 'UsersController@create')->name('users.create');
Route::get('/Users', 'UsersController@store')->name('users.store');
Route::get('/Users/{user}/Edit', 'UsersController@edit')->name('users.edit');
Route::get('/Users/{user}', 'UsersController@update')->name('users.update');
Route::get('/Users/{user}', 'UsersController@destroy')->name('users.destroy');

## COLLABORATION FUNCTION ROUTES ##
Route::get('/Collaborations', 'CollaborationsController@index')->name('collaborations.index');
Route::get('/Collaborations/Create', 'CollaborationsController@create')->name('collaborations.create');
Route::get('/Collaborations', 'CollaborationsController@store')->name('collaborations.store');
Route::get('/Collaborations/{collaboration}/Edit', 'CollaborationsController@edit')->name('collaborations.edit');
Route::get('/Collaborations/{collaboration}', 'CollaborationsController@update')->name('collaborations.update');
Route::get('/Collaborations/{collaboration}', 'CollaborationsController@destroy')->name('collaborations.destroy');

## PROJECT FUNCTION ROUTES ##
Route::get('/Projects', 'ProjectsController@index')->name('projects.index');
Route::get('/Projects/Create', 'ProjectsController@create')->name('projects.create');
Route::get('/Projects', 'ProjectsController@store')->name('projects.store');
Route::get('/Projects/{project}/Edit', 'ProjectsController@edit')->name('projects.edit');
Route::get('/Projects/{project}', 'ProjectsController@update')->name('projects.update');
Route::get('/Projects/{project}', 'ProjectsController@destroy')->name('projects.destroy');

## REPORT FUNCTION ROUTES ##
Route::get('/Reports', 'ReportsController@index')->name('reports.index');
Route::get('/Reports/Create', 'ReportsController@create')->name('reports.create');
Route::get('/Reports', 'ReportsController@store')->name('reports.store');
Route::get('/Reports/{report}/Edit', 'ReportsController@edit')->name('reports.edit');
Route::get('/Reports/{report}', 'ReportsController@update')->name('reports.update');
Route::get('/Reports/{report}', 'ReportsController@destroy')->name('reports.destroy');

//////////////////////////////////////////
/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
*/
