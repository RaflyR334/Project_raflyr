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
    return view('welcome');
});

Route::get('/home', function () {
    return view('biodata1');
});

Route::get('/about', function () {
    $nama = "Lamine Yamal";
    $jk = "Laki-laki";
    $alamat = "Jl Catalunya";
    $pen = "S3";
    $pekerjaan = "Pemain Bola";
    return view('biodata2', compact('nama','jk','alamat','pen','pekerjaan'));
});

Route::get('/kontak', function () {
    return view('biodata3');
});

//parameter
Route::get('/about2/{nama}/{jk}/{almt}/{pen}/{pek}', function (Request $request, $nama,$jk,$almt,$pen,$pek) {

    $nama2 = $nama;
    $jk2 = $jk;
    $alamat2 = $almt;
    $pen2 = $pen;
    $pek2 = $pek;
    return view('params', compact('nama2','jk2','alamat2','pen2','pek2'));
});