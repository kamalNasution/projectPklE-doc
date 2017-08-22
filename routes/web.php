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
Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dasbor');
});

Route::get('/user', function () {
    return view('user.userdashboard');
});

Route::get('/dashboard/pilihsurat', function () {
    return view('pilihsurat');
});
Route::get('/dashboard/pilihsurat/memorandum', function () {
    return view('memorandum');
});
Route::get('/dashboard/pilihsurat/surat_edaran', function () {
    return view('surat_edaran');
});
Route::get('/dashboard/pilihsurat/intern', function () {
    return view('intern');
});

Route::get('/beranda', function () {
    return view('beranda');
});



Route::get('kirimpesan','ControllerMemorandum@sent');

Route::get('/suratview', function () {
    return view('suratview');
});

Route::get('dashboard/inbox/memorandum','ControllerMemorandum@read');
Route::get('/memorandumedit/{id}','ControllerMemorandum@show');
Route::get('/memorandumpreview/{id}','ControllerMemorandum@preview');
Route::get('/memorandumdelete/{id}', 'ControllerMemorandum@hapus');
Route::get('/memorandumapp/{id}','ControllerMemorandum@app');
Route::post('/simpanmemorandum','ControllerMemorandum@store');
Route::post('/updatememorandum/{id}','ControllerMemorandum@ubah');
Route::get('/suratpdf/{id}','ControllerMemorandum@tampil');
Route::get('/getPDF','ControllerMemorandum@pdf');


Route::get('dashboard/inbox/suratedaran','ControllerSuratEdaran@read');
Route::get('/suratedaranedit/{id}','ControllerSuratEdaran@show');
Route::get('/edaranpreview/{id}','ControllerSuratEdaran@preview');
Route::get('/edarandelete/{id}', 'ControllerSuratEdaran@hapus');
Route::post('/updatesuratedaran/{id}','ControllerSuratEdaran@ubah');
Route::post('/simpansuratedaran','ControllerSuratEdaran@store');


Route::get('dashboard/inbox/intern','ControllerIntern@read');
Route::get('/internedit/{id}','ControllerIntern@show');
Route::get('/internpreview/{id}','ControllerIntern@preview');
Route::get('/interndelete/{id}', 'ControllerIntern@hapus');
Route::post('/simpanintern','ControllerIntern@store');
Route::post('/updateintern/{id}','ControllerIntern@ubah');
