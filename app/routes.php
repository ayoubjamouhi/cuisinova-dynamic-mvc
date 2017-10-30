<?php
	$router->get('' 			 		, 'PagesController@home');
	$router->get('admin' 		 		, 'AdminController@admin');
	$router->get('admin/adminhome' 		, 'AdminController@adminhome');
	$router->get('admin/logout' 		, 'AdminController@logoutadmin');
	$router->get('error'         	, 'PagesController@error');
	$router->post('admin/checklogin_admin' , 'AdminController@checkloginadmin');
	$router->post('login'    	 	, 'UsersController@login');


	$router->get('admin/ajouterarticle' 		, 'ArticleController@ajouterarticle');
	$router->post('admin/checknewarticle' , 'ArticleController@checknewarticle');
