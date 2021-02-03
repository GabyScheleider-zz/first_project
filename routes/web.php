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

/* 
Route::get('/', function () {
    return view('welcome');
}); */

Route::namespace('Site')->group(function(){
    /* Rota para uma página index, criado usando o método invokable (--invokable)*/
    Route::get('/', 'HomeController');

    /* Rota para uma outra página, agora produtos neste caso. Criado usando o método resource (-r). Ele foi criado como resource pois o CRUD ficará dentro dele
     Essa página tem como objetivo mostrar várias coisas em um modelo, como se fosse um catálogo em que você clica para ver mais detalhes*/
    Route::get('produtos','CategoryController@index');
    /* Criar as rotas para os aquivos dentro da categoria, através do slug ele vai cair na sessão de determinado produto */
    Route::get('produtos/{slug}','CategoryController@show');

    /* Blog vai mostrar aparte de paginação */
    Route::get('blog','BlogController');

    /* Sobre é uma página estática que vai servir para mostrar infos do site*/
    Route::view('sobre','site\sobre\index');

    /* Uma página para contato,que vai ter um formulário que vai usar post. para criar a rota, podemos usar o get, para a visualização na URL*/
    Route::get('contato','ContactController@index');
    /* Agora a rota do formulário de contato, que pode ser a mesma rota mas envios diferentes, não tem problema */
    Route::post('contato','ContactController@formContact');
});