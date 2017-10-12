<?php

namespace App\Controllers;

use App\core\App;

class ClientsController

{

	/* Start Get */

	public function users()
	
	{
		session_start();
		if($_SESSION['user'] !=false)
		{


		$users = App::get('clientsAPI')->selectAll();

		return view('users',compact('users'));	
		}	

		
	}

	public function editform()
	
	{

		$b = trim(parse_url(@$_SERVER['PATH_INFO'],PHP_URL_PATH),'/');

		$c=explode('/',$b); 

		if(is_numeric($c[1]))
		
		{
			$id = (int)$c[1];

			$user = App::get('clientsAPI')->selectAll("WHERE `id` = $id");

			if($user[0] != NULL)
				return view('editform',compact('c'));	
			else
				return view('error');	

		}

	}

	/* Start End */


	/* Start Post */

	public function store()
	
	{
		
		$insert = App::get('clientsAPI')->insert($_POST['firstname'],$_POST['lastname'],$_POST['email']);
	}



	public function edit()
	
	{
		
		$edit = App::get('clientsAPI')->update($_POST['hidden'],$_POST['firstname'],$_POST['lastname'],$_POST['email']);

		return view('edit',compact('edit'));		
	}

	/* End Post */

}