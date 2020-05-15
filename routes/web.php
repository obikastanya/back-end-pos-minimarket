<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
// Barang
$router->get('/get-barang', 'BarangController@index');
$router->post('/input-stock', 'BarangController@inputBarang');
$router->delete('/delete-stock/{id}', 'BarangController@deleteBarang');
$router->post('/update-stock', 'BarangController@updateBarang');

// Jenis Barang
$router->get('/get-jenis-barang', 'JenisBarangController@index');
$router->post('/input-jenis-barang', 'JenisBarangController@inputJenisBarang');
$router->delete('/delete-jenis-barang/{id}', 'JenisBarangController@deleteJenisBarang');
$router->post('/update-jenis-barang', 'JenisBarangController@updateJenisBarang');

// Pegawai
$router->get('/get-pegawai', 'PegawaiController@index');
$router->post('/input-pegawai', 'PegawaiController@inputPegawai');
$router->delete('/delete-pegawai/{id}', 'PegawaiController@deletePegawai');
$router->post('/update-pegawai', 'PegawaiController@updatePegawai');


// Supplier
$router->get('/get-supplier', 'SupplierController@index');
$router->post('/input-supplier', 'SupplierController@inputSupplier');
$router->delete('/delete-supplier/{id}', 'SupplierController@deleteSupplier');
$router->post('/update-supplier', 'SupplierController@updateSupplier');
