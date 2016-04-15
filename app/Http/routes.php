<?php
/*
se pueden tener rutas GET PUT POST DELETE 
*/
Route::get('/', function () {
    return view('welcome');
});

//Route::group(['prefix'=>'admin','middleware'=>'auth'], function () {
Route::group(['prefix'=>'admin','middleware'=>'auth'], function () {

	Route::get('/',['as'=>'admin.index',function () {
		return view('welcome');
	}]);

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses'=>'UsersController@destroy',
		'as'=>'admin.users.destroy'
		]);

	Route::resource('categories','CategoriesController');
	Route::get('categories/{id}/destroy',[
		'uses'=>'CategoriesController@destroy',
		'as'=>'admin.categories.destroy'
		]);

	Route::resource('tags','TagsController');
	Route::get('tags/{id}/destroy',[
		'uses'=>'TagsController@destroy',
		'as'=>'admin.tags.destroy'
		]);

	Route::resource('articles','ArticlesController');
	Route::get('articles/{id}/destroy',[
		'uses'=>'ArticlesController@destroy',
		'as'=>'admin.articles.destroy'
		]);
	//Route::get('users')
	
});

Route::get('admin/auth/login', [
	'uses'=>'Auth\AuthController@getLogin',
	'as'=>'admin.auth.login'
	]);

Route::post('admin/auth/login',[
	'uses'=>'Auth\AuthController@postLogin',
	'as'=>'admin.auth.login'
	]);

Route::get('admin/auth/logout',[
	'uses'=>'Auth\AuthController@getLogout',
	'as'=>'admin.auth.logout'
	]);

	



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

