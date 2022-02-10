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
  $data = [
    'name' =>  'Francesco',
    'lastname' => 'Ostellari',
    'sports' => [
      'football', 'hockey', 'tennis', 'swimming'
    ]
  ];
  return view('home', $data);
}) ->name('home');
Route::get('/info', function () {
    $data = [
      'info' => [
        'mail' => 'mail: francesco@mail.it',
        'telefono' => 'telefono: 123456789',
        'social' => 'social: francesco_ostellari'
      ]   
    ];
  return view('info', $data);
})->name('info');