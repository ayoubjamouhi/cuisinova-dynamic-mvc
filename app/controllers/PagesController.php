<?php

namespace App\Controllers;

use App\Core\App;

class PagesController

{

	public function home()
	
	{

			return view('index');
	}

	public function about()
	
	{
		
		return view('about');			
	}

	public function contact()
	
	{
	
		return view('contact');		
	}

	public function users()
	
	{
		
		return view('contact');			
	}

	public function error()
	
	{
		
		return view('error');
	}


}