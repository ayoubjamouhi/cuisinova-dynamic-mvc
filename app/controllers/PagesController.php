<?php

namespace App\Controllers;

use App\Core\App;

class PagesController

{

	public function home()
	
	{
		/*
			Article par rapport chaque position dans l'accueil
		*/
		$articlesPosition1 =  App::get('ArticleAPI')->selectWithPosition(1);
		$articlesPosition2 =  App::get('ArticleAPI')->selectWithPosition(2);
		$articlesPosition3 =  App::get('ArticleAPI')->selectWithPosition(3);


		return view('index','',compact('articlesPosition1','articlesPosition2','articlesPosition3'));
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