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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

$this->get('states', 'Admin\StatesController@index');
$this->get('cities/{state}', 'Admin\CitiesController@index');

// Rotas admin
$this->group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    $this->get('clients', 'ClientsController@index');
    $this->post('clients', 'ClientsController@store');
});
