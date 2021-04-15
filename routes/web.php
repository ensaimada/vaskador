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

## PUBLIC PAGES ##
Route::get('/index', function () { return Inertia::render('Public/Index', []); });
Route::get('/about', function () { return Inertia::render('Public/About', []); });
Route::get('/services', function () { return Inertia::render('Public/Services', []); });
Route::get('/docs', function () { return Inertia::render('Public/Documentation', []); });
Route::get('/contact', function () { return Inertia::render('Public/Contact', []); });

## AUTHN PAGES ##
Route::get('/enter', function () { return Inertia::render('Authn/Enter', []); });
Route::get('/login', function () { return Inertia::render('Authn/Login', []); });           // As Components
Route::get('/register', function () { return Inertia::render('Authn/Register', []); });     // As Components

## DASHBOARD PAGES ##
Route::get('/playground', function () { return Inertia::render('Dashboard/Index', []); });

## USER PAGE ROUTES ##
Route::get('/u-index', function () { return Inertia::render('Users/Index', []); });
Route::get('/u-create', function () { return Inertia::render('Users/Create', []); });
Route::get('/u-edit', function () { return Inertia::render('Users/Edit', []); });

## PROJECT PAGE ROUTES ##
Route::get('/p-index', function () { return Inertia::render('Projects/Index', []); });
Route::get('/p-create', function () { return Inertia::render('Projects/Create', []); });
Route::get('/p-edit', function () { return Inertia::render('Projects/Edit', []); });
Route::get('/p-mapview', function () { return Inertia::render('Projects/MapView', []); });

## COLLABORATION PAGE ROUTES ##
Route::get('/c-index', function () { return Inertia::render('Users/Index', []); });
Route::get('/c-create', function () { return Inertia::render('Users/Create', []); });
Route::get('/c-edit', function () { return Inertia::render('Users/Edit', []); });

## REPORTS PAGE ROUTES ##
Route::get('/r-index', function () { return Inertia::render('Users/Index', []); });
Route::get('/r-create', function () { return Inertia::render('Users/Create', []); });
Route::get('/r-edit', function () { return Inertia::render('Users/Edit', []); });

## USER FUNCTION ROUTES ##
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('user.create');
Route::post('/users', 'UserController@store')->name('user.store');
Route::get('/users/{user}/edit', 'UserController@edit')->name('user.edit');
Route::patch('/users/{user}', 'UserController@update')->name('user.update');
Route::delete('/users/{user}', 'UserController@destroy')->name('user.destroy');

## COLLABORATION FUNCTION ROUTES ##
Route::get('/collaborations', 'CollaborationController@index')->name('collaboration.index');
Route::get('/collaborations/create', 'CollaborationController@create')->name('collaboration.create');
Route::post('/collaborations', 'CollaborationController@store')->name('collaboration.store');
Route::get('/collaborations/{collaboration}/edit', 'CollaborationController@edit')->name('collaboration.edit');
Route::patch('/collaborations/{collaboration}', 'CollaborationController@update')->name('collaboration.update');
Route::delete('/collaborations/{collaboration}', 'CollaborationController@destroy')->name('collaboration.destroy');

## PROJECT FUNCTION ROUTES ##
Route::get('/projects', 'ProjectController@index')->name('project.index');
Route::get('/projects/create', 'ProjectController@create')->name('project.create');
Route::post('/projects', 'ProjectController@store')->name('project.store');
Route::get('/projects/{project}/edit', 'ProjectController@edit')->name('project.edit');
Route::patch('/projects/{project}', 'ProjectController@update')->name('project.update');
Route::delete('/projects/{project}', 'ProjectController@destroy')->name('project.destroy');

## REPORT FUNCTION ROUTES ##
Route::get('/reports', 'ReportController@index')->name('report.index');
Route::get('/reports/create', 'ReportController@create')->name('report.create');
Route::post('/reports', 'ReportController@store')->name('report.store');
Route::get('/reports/{report}/edit', 'ReportController@edit')->name('report.edit');
Route::patch('/reports/{report}', 'ReportController@update')->name('report.update');
Route::delete('/reports/{report}', 'ReportController@destroy')->name('report.destroy');
Route::get('reports/{report}/export', 'ReportController@exportToPDF')->name('report.exportToPDF');

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
