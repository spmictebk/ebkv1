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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function() { 

   
    // PYD
    
    Route::get('/test/listtest', 'TestController@show')->name('list.test');
    
    Route::get('/test/createtest', 'TestController@createtest')->name('create.test');

    Route::post('/test/createtest', 'TestController@storetest')->name('save.test');

    Route::get('/test/{id}/destroyAll', 'TestController@destroyAll')->name('destroyAll.test');

    // PYD PP KPP KPPK Fungsi

    Route::get('/test/{id}/createtest2', 'Test2Controller@createtest2')->name('create.test2');

    Route::post('/test/createtest2', 'Test2Controller@storetest2')->name('save.test2');

    Route::get('/test/{id}/createtest3', 'Test2Controller@createtest3')->name('create.test3');

    Route::post('/test/createtest3', 'Test2Controller@storetest3')->name('save.test3');
    
    Route::get('/test/listtest2', 'Test2Controller@show')->name('list.test2');

    Route::get('/test/{id}/edittest2', 'Test2Controller@edittest2')->name('edit.test2');

    Route::post('/test/edittest2', 'Test2Controller@updatetest2')->name('update.test2');

    Route::get('/test/{id}/edittest3', 'Test2Controller@edittest3')->name('edit.test3');

    Route::post('/test/edittest3', 'Test2Controller@updatetest3')->name('update.test3');

    Route::get('/test/{id}/kekal', 'Test2Controller@kekaltest2')->name('kekal.test2');

    Route::post('/test/kekal', 'Test2Controller@kekal1test2')->name('kekal1.test2');

    Route::get('/test/{id}/pinda', 'Test2Controller@pindatest2')->name('pinda.test2');

    Route::post('/test/pinda', 'Test2Controller@pinda1test2')->name('pinda1.test2');

    Route::get('/test/{id}/gugur', 'Test2Controller@gugurtest2')->name('gugur.test2');

    Route::post('/test/gugur', 'Test2Controller@gugur1test2')->name('gugur1.test2');

    Route::get('/test/{id}/destroy', 'Test2Controller@destroy')->name('destroy.test2');

    // KPP KPPK Pengarah 

    Route::get('/test1/listtest', 'Test3Controller@show')->name('list.test3');

    Route::get('/test1/listtest2', 'Test3Controller@show2')->name('list2.test3');

    Route::get('/test1/listtest21', 'Test3Controller@show21')->name('list21.test31');

    Route::get('/test1/listtest3', 'Test3Controller@show3')->name('list3.test3');

    Route::get('/test1/{id}/penilaian1', 'Test3Controller@editp1')->name('p1.edit');

    Route::post('/test1/penilaian1', 'Test3Controller@updatep1')->name('p1.update');

    Route::get('/test1/{id}/penilaian2', 'Test3Controller@editp2')->name('p2.edit');

    Route::post('/test1/penilaian2', 'Test3Controller@updatep2')->name('p2.update');
    
    Route::post('/test1/{ext2_id}/ulasan', 'Test3Controller@ulasan')->name('ulasan.test4');

    Route::post('/test1/{ext2_id}/kira', 'Test3Controller@Kira2')->name('kira.test2');

    Route::post('/test1/{ext2_id}/kira1', 'Test3Controller@Kira3')->name('kira.test3');

    Route::get('/test1/laporan', 'Test3Controller@laporan')->name('laporan.pegawai');

    Route::get('/test1/laporan2', 'Test3Controller@laporan2')->name('laporan2.pegawai2');

    

    // Cetak & Search

    Route::get('/test/{id}/cetak', 'TestController@cetak')->name('cetak.test');

    Route::get('/test/cetak2', 'Test3Controller@cetak2')->name('cetak.test3');

    //Route::get('/test/listtest2', 'Test3Controller@show2')->name('list2.test3');

    Route::get('/test1/search', 'Test3Controller@search')->name('search.test3');

    Route::get('/test1/laporanadd', 'Test3Controller@AdsearchPost')->name('addsearch.test3');



    // User

    Route::get('/pengguna/listpengguna', 'UserController@show')->name('list.pengguna');

    Route::get('/pengguna/listpengguna2', 'UserController@show2')->name('list2.pengguna');

    Route::get('/pengguna/daftarpengguna', 'UserController@create')->name('daftar.pengguna');

    Route::post('/pengguna/daftarpengguna', 'UserController@store')->name('daftar');

    Route::get('/pengguna/{id}/editpengguna', 'UserController@editPengguna')->name('edit.pengguna');

    Route::get('/pengguna/{id}/editpengguna2', 'UserController@editPengguna2')->name('edit.pengguna2');
    
    Route::post('/pengguna/editpengguna', 'UserController@updatePengguna')->name('update.pengguna');

    Route::post('/pengguna/editpengguna2', 'UserController@updatePengguna2')->name('update.pengguna2');

    Route::get('/pengguna/{id}/deletepengguna', 'UserController@destroy')->name('delete.pengguna');

    Route::get('/pengguna/profile', 'UserController@profile')->name('daftar.profile');

    Route::post('/pengguna/profile', 'UserController@profile1')->name('daftar.profile1');

});

require __DIR__.'/auth.php';
