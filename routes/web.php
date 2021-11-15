<?php
use App\Http\Controllers\ViewController;
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
