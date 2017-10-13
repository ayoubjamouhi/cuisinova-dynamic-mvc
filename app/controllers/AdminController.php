<?php

namespace App\Controllers;

use App\core\App;
use App\Core\Db\Connection;
class AdminController

{

	public function admin()
	
	{

		session_start();

		if($_SESSION['user'] == FALSE)
			return view('loginadmin','admin');
		else
			header("Location: /");
	}

	public function adminhome()
	
	{
		session_start();
		$session = $_SESSION['user'];
		if($_SESSION['user'] != FALSE)
			return view('adminhome','admin',compact('session'));
		else
			header("Location: /");		
		
	}

	public function ajouterarticle()
	
	{
		session_start();
		
		if($_SESSION['user'] != FALSE)
			return view('ajouterarticle','admin');
		else
			header("Location: /");	
		
	}

	public function logoutadmin()
	
	{
		session_start();
		if($_SESSION['user'] != FALSE)
		
		{

			$_SESSION['user'] = FALSE;
			echo "log out success";
			header("Refresh:3; url=/");
		}
		else
			header("Location : /");
	}

	/* Post Functions */

	public function checkloginadmin()
	
	{

		if(isset($_POST['login']))
		
		{
			
			if(empty($_POST['username']) || empty($_POST['password']))
				die("Error");

			$_user = Connection::make(App::get('config')['database'])->quote($_POST['username']);
			$_pass = Connection::make(App::get('config')['database'])->quote(md5($_POST['password']));

			$users = App::get('UsersAPI')->selectAll("WHERE `username` = {$_user} AND `password` = {$_pass}");

			

			session_start();

		    if($users != NULL)

		    {

		    	$_SESSION['user'] = $users[0];
		    	header("Refresh:3; url=/admin/adminhome");
		    }
		    else

		    {

		    	$_SESSION['user'] = FALSE;
		    }

		}
	}

	public function checknewarticle()
	
	{
		
		if(isset($_POST['ajouterarticle']))

		{

			$values = [1,2,3];
			
			$insertImg = App::get('ImagesAPI')->insererImage($_FILES['fic']);

			if($insertImg)
			
			{
				if(in_array((int)$_POST['position'], $values))
				{
					$insertArticle = App::get('ArticleAPI')->insererArticle($_POST['titre'],$_POST['text'],(int)$_POST['position'],App::get('ImagesAPI')->lastIdInserer());
				}
				if($insertArticle)

				{

					echo "success ajoute article";
					header("Refresh:3; url=/admin/adminhome");
				}
				else
					echo "echec ajoute article";
			}	
			else
				echo "Echec ajout img";
			
		}
	}

}