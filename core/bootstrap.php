<?php
	
use App\Core\App;
use App\Core\Db\Connection;


App::bind('config' , require 'config.php');


App::bind('ArticleAPI' , new ArticleAPI(
							Connection::make(App::get('config')['database'])	
));

App::bind('ImagesAPI' , new ImagesAPI(
							Connection::make(App::get('config')['database'])	
));

App::bind('UsersAPI'   , new UsersAPI(
							Connection::make(App::get('config')['database'])	
));

function view($page,$folder= '',$data = [])
	
{
	extract($data);

	if($folder == '')
		return require "app/views/{$page}.view.php";
	else
		return require "app/views/{$folder}/{$page}.view.php";
}


