<?php
//PagesController.php
class PagesController {

	public $html;
	public $projectModel;
	public $uri;
	
	public function __construct() {
		
		$this->html = new HtmlHelper();
		$this->projectModel = new ProjectModel();
	}
		
	public function home_action() {
		
		require 'views/pages/home.php';
	}

	public function projects_action($id = null) {

		$project = $this->projectModel->find_project_by_id((int)$id);

		if(is_null($project)) {
			header("Location: /pages/404");
			exit;
		}
		
		require 'views/pages/projects.php';
	}

	public function error404_action() {

		
		require 'views/errors/error404.php';
	}
}
