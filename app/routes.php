	<?php



	$router->get('' 			 	, 'PagesController@home');
	$router->get('admin' 		 	, 'AdminController@admin');
	$router->get('admin/adminhome' 		, 'AdminController@adminhome');
	$router->get('admin/ajouterarticle' 		, 'AdminController@ajouterarticle');
	$router->get('admin/logout' 		, 'AdminController@logoutadmin');
	$router->get('users'         	, 'ClientsController@users');
	$router->get('error'         	, 'PagesController@error');
	$router->get('edit/{id}'     	, 'ClientsController@editform');
	//$router->get('delete'        , 'ClientsController@delete');

	$router->post('admin/checklogin_admin' , 'AdminController@checkloginadmin');
	$router->post('admin/checknewarticle' , 'AdminController@checknewarticle');
	$router->post('users'        	, 'ClientsController@store');
	$router->post('edit/{id}'    	, 'ClientsController@edit');
	$router->post('login'    	 	, 'UsersController@login');