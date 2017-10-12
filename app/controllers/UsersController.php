<?php 

namespace App\Controllers;

use App\Core\App;
use App\Core\Db\Connection;

class UsersController

{

	public function login()
	
	{
		
		if($_POST['login'])
		
		{

			if(empty($_POST['email']) || empty($_POST['password']))
				die("Error");

			$_email = Connection::make(App::get('config')['database'])->quote($_POST['email']);
			$_pass = Connection::make(App::get('config')['database'])->quote(md5($_POST['password']));
			
			$users = App::get('usersAPI')->selectAll("WHERE `email` = {$_email} AND `password` = {$_pass}");

			session_start();

		    if($users != NULL)

		    {

		    	$_SESSION['user'] = $users[0];
		    	var_dump($_SESSION['user']);
		    }
		    else

		    {

		    	$_SESSION['user'] = FALSE;
		    }

		}


	}
}
?>