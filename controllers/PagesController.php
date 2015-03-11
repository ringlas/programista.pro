<?php
//PagesController.php
class PagesController {

	public $html;
	
	public function __construct() {
		
		$this->html = new HtmlHelper();
	}
		
	public function home_action() {
		
		require 'views/pages/home.php';
	}
}
