<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/





Route::get('imovel/ordenar', 'Api\ImovelController@ordenar');

Route::get('imovel/pesquisarPorBairro/{bairro}', 'Api\ImovelController@pesquisarPorBairro');

Route::get('imovel/pesquisarPorMunicipio/{municipio}', 'Api\ImovelController@pesquisarPorMunicipio');

Route::resource('imovel', 'Api\ImovelController');




