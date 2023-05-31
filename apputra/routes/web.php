<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/putra1', function(){
	return 'Hallo Putra';
});

Route::get('/lt', function(){
	return view ('latihan1');
});

Route::get('/mahasiswa',function(){
	$nama = 'M Putra Mulya Pratama';
	$nilai = '80';
	return view ('mahasiswa', compact('nama','nilai'));
});

Route::get('/p3-l1',function(){
	$nama = 'Dinda Marcellah';
	$nilai = '90';
	return view ('mahasiswa2', compact('nama','nilai'));
});

Route::get('/p3-l2',function(){
	$nama = 'Furuta';
	$nilai_huruf ='A';
	return view ('mahasiswa3', compact('nama','nilai_huruf'));
});

Route::get('/putra2', function(){
	echo '<h1>Institut Teknologi dan Bisnis Palcomtech</h1>';
	echo '<p>Saya M Putra, prodi sistem informasi</p>';
});

Route::get('/p4-l1', function(){
	return view('mahasiswa4');
});

Route::get('/p4-l2', function(){
	$arrMahasiswa = ["Putra Pratama","M Islam","Raihan SA","Dinda M","Azzahra PP","Lydia WW","Shelly A"];
	return view('mahasiswa77')->with('mahasiswa',$arrMahasiswa);
});

Route::get('/p4-l3', function(){
	$arrDosen = ["Dini HP","Fatmariani","Andri SP","Eko S","Andika","Mariana P"];
	return view('dosen77')->with('dosen',$arrDosen);
});
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
Route::get('/p4-l4', function(){
	return view('gallery');
});

Route::get('p5_l1', [MahasiswaController::class, 'tampil']);

Route::get('Buku', [bookControler::class, 'tampil']);