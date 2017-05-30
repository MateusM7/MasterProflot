<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('menu');
});


Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){

/*-----------------------------Periodos----------------------------------------------------------*/
Route::get('periodos/index',['as'=>'periodos.index', 'uses'=>'PeriodoController@index']);
Route::get('periodos/novo',['as'=>'periodos.create', 'uses'=>'PeriodoController@create']);
Route::post('periodos/store',['as'=>'periodos.store', 'uses'=>'PeriodoController@store']);
Route::get('periodos/editar/{id}',['as'=>'periodos.edit', 'uses'=>'PeriodoController@edit']);
Route::post('periodos/update/{id}',['as'=>'periodos.update', 'uses'=>'PeriodoController@update']);

/*-----------------------------Professores----------------------------------------------------------*/
Route::get('professores/index',['as'=>'professores.index', 'uses'=>'ProfessorController@index']);
Route::get('professores/novo',['as'=>'professores.create', 'uses'=>'ProfessorController@create']);
Route::post('professores/store',['as'=>'professores.store', 'uses'=>'ProfessorController@store']);
Route::get('professores/editar/{id}',['as'=>'professores.edit', 'uses'=>'ProfessorController@edit']);
Route::post('professores/update/{id}',['as'=>'professores.update', 'uses'=>'ProfessorController@update']);
Route::get('professores/destroy/{id}',['as'=>'professores.destroy', 'uses'=>'ProfessorController@destroy']);
Route::get('professores/show/{id}',['as'=>'professores.show', 'uses'=>'ProfessorController@show']);

/*-----------------------------Tipos------------------------------------------------------------------*/
Route::get('tipos/index',['as'=>'tipos.index', 'uses'=>'TipoController@index']);
Route::get('tipos/novo',['as'=>'tipos.create', 'uses'=>'TipoController@create']);
Route::post('tipos/store',['as'=>'tipos.store', 'uses'=>'TipoController@store']);
Route::get('tipos/editar/{id}',['as'=>'tipos.edit', 'uses'=>'TipoController@edit']);
Route::post('tipos/update/{id}',['as'=>'tipos.update', 'uses'=>'TipoController@update']);

<<<<<<< HEAD
/*-----------------------------Disciplinas------------------------------------------------------------------*/
Route::get('disciplinas/index',['as'=>'disciplinas.index', 'uses'=>'DisciplinaController@index']);
Route::get('disciplinas/novo',['as'=>'disciplinas.create', 'uses'=>'DisciplinaController@create']);
Route::post('disciplina/store',['as'=>'disciplinas.store', 'uses'=>'DisciplinaController@store']);
Route::get('disciplinas/editar/{id}',['as'=>'disciplinas.edit', 'uses'=>'DisciplinaController@edit']);
Route::post('disciplinas/update/{id}',['as'=>'disciplinas.update', 'uses'=>'DisciplinaController@update']);
Route::get('disciplinas/destroy/{id}',['as'=>'disciplinas.destroy', 'uses'=>'DisciplinaController@destroy']);
Route::get('disciplinas/show/{id}',['as'=>'disciplinas.show', 'uses'=>'DisciplinaController@show']);

=======
/*----------------------------Cursos-------------------------------------------------------------------*/
Route::get('cursos/exibir',['as'=>'cursos.index', 'uses'=>'CursoController@index']);
Route::get('cursos/novo',['as'=>'cursos.create', 'uses'=>'CursoController@create']);
Route::post('cursos/store',['as'=>'cursos.store', 'uses'=>'CursoController@store']);
Route::get('cursos/editar/{id}',['as'=>'cursos.edit', 'uses'=>'CursoController@edit']);
Route::post('cursos/update/{id}',['as'=>'cursos.update', 'uses'=>'CursoController@update']);
>>>>>>> upstream/master

});
