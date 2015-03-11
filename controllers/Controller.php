<?php 
//controller.php
class Controller {
	
	//construct to load before filter method
	public function __construct($uri) 
	{
		$this->before_filter($uri);
	}
	
	public function before_filter($uri) {
				
		// if($uri ==  SITE_ROOT . '/index.php' || $uri ==  SITE_ROOT . '/index.php/login' || $uri ==  SITE_ROOT . '/index.php/register' || $uri ==  SITE_ROOT . '/index.php/logout') 
		// {
		// 	return true;
		// }
		// else 
		// {
		// 	if(!isset($_SESSION['user'])) 
		// 	{
		// 		$_SESSION['msg'] = '<p class="article-text alert alert-warning">Моля, първо влезте в системата!</p>';
		// 		//redirect to login page if unauthorized access
		// 		header("Location: ". SITE_ROOT ."/index.php/login");
		// 		exit;
		// 	}
			
		// }
	}
}
