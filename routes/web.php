<?php
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use function foo\func;
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
Route::get('praktikum1' , function(){
    return view('prak1web');
});
Route::get('tugas4' , function(){
    return view('tugas4');
});
Route::get('praktikum2' , [ViewController::class, 'showPraktikum2']);
Route::get('ets' , [ViewController::class, 'showETS']);
Route::get('tugas9' , [ViewController::class, 'showForm']);
Route::post('tugas9php' , [ViewController::class, 'tugasphp']);
//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/task','TugasController@index');
Route::get('/task/tambah','TugasController@tambah');
Route::post('/task/store','TugasController@store');
Route::get('/task/edit/{id}','TugasController@edit');
Route::post('/task/update','TugasController@update');
Route::get('/task/hapus/{id}','TugasController@hapus');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/home', function () {
    return view('layouts.beranda');
});
Route::get('/home5', function () {
    return view('bootstrap5.home');
});
