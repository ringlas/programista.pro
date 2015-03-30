<?php
//CareersController.php
class CareersController {

	public $html;
	public $careerModel;
	public $uri;
	
	public function __construct() {
		
		$this->html = new HtmlHelper();
		$this->careerModel = new CareerModel();
	}

	public function list_action() {

		$careers = $this->careerModel->findAllCareers();

		if(is_null($careers)) {
			header("Location: /pages/404");
			exit;
		}
		
		require 'views/careers/list.php';
	}

	public function view_action($id = null) {

		$career = $this->careerModel->findById($id);

		if(is_null($career)) {
			header("Location: /pages/404");
			exit;
		}
		
		require 'views/careers/view.php';
	}
}
