<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBiodataController;
use App\Http\Controllers\DashboardPersyaratanAwalController;
use App\Http\Controllers\DashboardOutlineController;
use App\Http\Controllers\DashboardDataBimbinganController;
use App\Http\Controllers\DashboardBimbinganTAController;
use App\Http\Controllers\DashboardVerifikasiController;
use App\Http\Controllers\DashboardPersetujuanDospemController;
use App\Http\Controllers\DashboardUploadController;
use App\Http\Controllers\DashboardUploadWisudaController;
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


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/download/{filename}', [DashboardController::class, 'download']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::Class, 'authenticate']);
Route::get('/logout', [LoginController::Class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::resource('/dashboard/biodata', DashboardBiodataController::class)->except(['show']);
Route::get('/dashboard/biodata/download-cv', [ DashboardBiodataController::class, 'downloadCv'])->name('biodata.download.cv');
Route::post('/dashboard/biodata/', [ DashboardBiodataController::class, 'update']);
Route::post('/dashboard/biodata/photo', [ DashboardBiodataController::class, 'photo']);

Route::resource('/dashboard/persyaratanawal', DashboardPersyaratanAwalController::class);
Route::post('/dashboard/persyaratanawal', [DashboardPersyaratanAwalController::Class, 'store']);
Route::post('/dashboard/persyaratanawal/{persyaratanawal}', [DashboardPersyaratanAwalController::class, 'update']);
Route::get('/dashboard/persyaratanawal/{persyaratanawal}', [DashboardPersyaratanAwalController::class, 'destroy']);

Route::resource('/dashboard/outline', DashboardOutlineController::class);
Route::post('/dashboard/outline', [DashboardOutlineController::Class, 'store']);
Route::post('/dashboard/outline/{outline}', [DashboardOutlineController::class, 'update']);
Route::get('/dashboard/outline/{outline}', [DashboardOutlineController::class, 'destroy']);

Route::resource('/dashboard/bimbingan/databimbingan', DashboardDataBimbinganController::class);
Route::post('/dashboard/bimbingan/databimbingan', [DashboardDataBimbinganController::Class, 'store']);
Route::post('/dashboard/bimbingan/databimbingan/{databimbingan}', [DashboardDataBimbinganController::class, 'update']);
Route::get('/dashboard/bimbingan/databimbingan/{databimbingan}', [DashboardDataBimbinganController::class, 'destroy']);

Route::resource('/dashboard/bimbingan/bimbinganta', DashboardBimbinganTAController::class);
Route::post('/dashboard/bimbingan/bimbinganta', [DashboardBimbinganTAController::Class, 'store']);
Route::post('/dashboard/bimbingan/bimbinganta/{bimbinganta}', [DashboardBimbinganTAController::class, 'update']);
Route::get('/dashboard/bimbingan/bimbinganta/delete/{bimbinganta}', [DashboardBimbinganTAController ::class, 'destroy']);

Route::resource('/dashboard/verifikasi', DashboardVerifikasiController::class);
Route::post('/dashboard/verifikasi', [DashboardVerifikasiController::Class, 'store']);
Route::post('/dashboard/verifikasi/{verifikasi}', [DashboardVerifikasiController::class, 'update']);
Route::get('/dashboard/verifikasi/{verifikasi}', [DashboardVerifikasiController ::class, 'destroy']);


Route::resource('/dashboard/persetujuandospem', DashboardPersetujuanDospemController::class);
Route::post('/dashboard/persetujuandospem', [DashboardPersetujuanDospemController::Class, 'store']);
Route::post('/dashboard/persetujuandospem/{persetujuandospem}', [DashboardPersetujuanDospemController::class, 'update']);
Route::get('/dashboard/persetujuandospem/{persetujuandospem}', [DashboardPersetujuanDospemController ::class, 'destroy']);

Route::resource('/dashboard/upload', DashboardUploadController::class);
Route::get('/dashboard/upload/download/{upload}/{file}', [DashboardUploadController::class, 'download'])->name('upload.download');
Route::get('/dashboard/upload/{upload}', [DashboardUploadController ::class, 'destroy']);

Route::resource('/dashboard/uploadwisuda', DashboardUploadWisudaController::class);
Route::post('/dashboard/uploadwisuda', [DashboardUploadWisudaController::Class, 'store']);
Route::post('/dashboard/uploadwisuda/{uploadwisuda}', [DashboardUploadWisudaController::class, 'update']);
Route::get('/dashboard/uploadwisuda/{uploadwisuda}', [DashboardUploadWisudaController ::class, 'destroy']);