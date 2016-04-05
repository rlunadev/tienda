<?php

/*
se pueden tener rutas GET PUT POST DELETE 
*/
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function () {
	Route::resource('users','UsersController');
});

/**Route::group(['prefix'=>'admin'], function() {
	Route::resource('user','UsersController');
});*/

//nos creamos una ruta /parametro
/**Route::get('articles/{nombre?}',function ($nombre="sin nombre") {
	echo "nombre es".$nombre;
});*/

/**Route::group(['prefix'=>'articles'], function () {

	Route::get('view/{id}',[
		'uses'=>'TestController@view',
		'as'=>'articlesView'
		]);

});*/

