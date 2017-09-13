<?php

/**
* \HomeController
*/
class HomeController extends BaseController
{
	
	public function home(){
		$article = Article::all();
		//return View::make('home')->with('title','就是这里');
		foreach ($article as $key => $value) {
			echo $value->title; echo $value->content;
		}
		
		require dirname(__FILE__).'/../views/home.php';
	}
}