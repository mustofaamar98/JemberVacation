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

Route::redirect('/home', '/');
Route::get('/', 'wisataController@index')->name('maps');
Route::get('/layout/rekomendasi', 'RekomendasiController@index')->name('cekrekomendasi');

Route::get('/partmaps', 'wisataController@partmaps')->name('partmaps');

Route::get('/infowisata', 'wisataController@show')->name('infowisata');

Route::get('/infowisata/{id}', 'wisataController@showData');

// Route::get('/layoutmaps', 'wisataController@layoutmaps')->name('layoutmaps');

Route::get('/partkalisat', 'wisataController@partkalisat')->name('partkalisat');

Route::get('/partwuluhan', 'wisataController@partwuluhan')->name('partwuluhan');

Route::get('/partjember', 'wisataController@partjember')->name('partjember');

Route::get('/partrambipuji', 'wisataController@partrambipuji')->name('partrambipuji');

Route::get('/partpuger', 'wisataController@partpuger')->name('partpuger');

Route::get('/parttanggul', 'wisataController@parttanggul')->name('parttanggul');

Route::get('/tampilkan/{distrik}' , 'wisataController@distrik')->name('distrik');

Route::get('/tampilkan2/{daerah}' , 'wisataController@daerah')->name('daerah');

Route::get('/rekomendasi/{rekomendasi}' , 'wisataController@rekomendasi')->name('rekomendasi');


Route::group(['middleware' => 'auth'] , function(){
    Route::get('/layoutdasboard', 'DashController@index')->name('dashboard');


    //route kusus menampilkan data dengan ajax//
    route::post('/layoutdashboard/{id}', 'DashController@showdata');
    route::post('/layoutdashboards/{id}', 'DashController@showdatahotel');
    route::post('/layoutdashboardss/{id}', 'DashController@showdatakuliner');
    route::post('/layoutdashboardsss/{id}', 'DashController@showdataprofil');
    
    //route untuk updatenya//
    route::put('/layoutdashboard/update/{id}', 'DashController@showdataform');
    route::put('/layoutdashboard/updatehotel/{id}', 'DashController@showdataformhotel');
    route::put('/layoutdashboard/updatekuliner/{id}', 'DashController@showdataformkuliner');
    route::put('/layoutdashboard/updateprofil/{id}', 'DashController@showdataformprofil');
    
    //route untuk delete//
    route::get('/layoutdashboard/delete/{id}', 'DashController@destroy');
    route::get('/layoutdashboard/deletes/{id}', 'DashController@destroyhotel');
    route::get('/layoutdashboard/deletess/{id}', 'DashController@destroykuliner');
    
    Route::post('/datawisata/store', 'DashController@store')->name('adddatawisata');
    Route::post('/datahotel/storehotel', 'DashController@storehotel')->name('adddatahotel');
    Route::post('/datakuliner/storekuliner', 'DashController@storekuliner')->name('adddatakuliner');
    Route::get('/layoutdasboard', 'DashController@index')->name('dashboard');
    
    
    //route kusus menampilkan data dengan ajax//
    route::post('/layoutdashboard/{id}', 'DashController@showdata');
    route::post('/layoutdashboards/{id}', 'DashController@showdatahotel');
    route::post('/layoutdashboardss/{id}', 'DashController@showdatakuliner');
    
    //route untuk updatenya//
    route::put('/layoutdashboard/update/{id}', 'DashController@showdataform');
    route::put('/layoutdashboard/updatehotel/{id}', 'DashController@showdataformhotel');
    route::put('/layoutdashboard/updatekuliner/{id}', 'DashController@showdataformkuliner');
    route::put('/layoutdashboard/updateprofil/{id}', 'DashController@updates')->name('updateprofil');
    
    //route untuk delete//
    route::get('/layoutdashboard/delete/{id}', 'DashController@destroy');
    route::get('/layoutdashboard/deletes/{id}', 'DashController@destroyhotel');
    route::get('/layoutdashboard/deletess/{id}', 'DashController@destroykuliner');
    
    Route::post('/datawisata/store', 'DashController@store')->name('adddatawisata');
    Route::post('/datahotel/storehotel', 'DashController@storehotel')->name('adddatahotel');
    Route::post('/datakuliner/storekuliner', 'DashController@storekuliner')->name('adddatakuliner');

});



// Route::get('/login', 'DashController@index')->name('login') ;
// Route::get('/wisata', function () {
//     return view('wisata');
// })->name('wisata') ;

// Route::get('/detailwisata', function () {
//     return view('detailwisata');
// })->name('detailwisata') ;

// Route::get('/detailwisata/create','wsataController@index');
Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
