<?php
//ProjectModel.php
class ProjectModel {
	
	public $model;
	
	//construct to load base Model class
	public function __construct() 
	{
		$this->model = new Model();
	}
	
	public function find_project_by_id($id)
	{

		$projects = array(
			'1' => array(
				'title' => 'SevOne NMS',
				'desc' => 'Network performance management and monitoring system, Custom licensing Server, 
					Device certification repository, Performance on demand',
				'duration' => 'July 2013 - present',
				'client' => 'USA based company - leader in the field of network performance management and monitoring',
				'developers' => '50',
				'expertise' => 'Perl, Python, PHP, HTML, CSS, JavaScript, jQuery, extJS, MySQL, C, C++, Unix',
				'img' => 'portfolio/project1.jpg'
			),
			'2' => array(
				'title' => 'USA Company',
				'desc' => 'Filings and Forms data extractor, web scraper, metadata extractor and persister to a 
					NoSQL database, Web tools for searching and management of searches in the accumulated data',
				'duration' => '3 months',
				'client' => 'USA based company - web tool for searching into Filings &amp; Forms from the 
					U.S. Securities and Exchange Commission-',
				'developers' => '3',
				'expertise' => 'C#, ASP.NET Webforms, HTML, CSS, JavaScript, jQuery, MySQL',
				'img' => 'portfolio/project2.jpg'
			),
			'3' => array(
				'title' => 'Russian Company',
				'desc' => 'Custom accounting system',
				'duration' => 'July 2013 - present',
				'client' => 'USA based company - leader in the field of network performance management and monitoring',
				'developers' => '50',
				'expertise' => 'Java, Jasper Reports, Oracle, Tomcat',
				'img' => 'portfolio/project3.jpg'
			)
		);
	
		return $projects[$id];
	}
	
	/**
	 * validate method
	 * @param data
	 * @return bool
	 */
	public function validates($data) 
	{
		$result = true;
		//validates if class is a number
		if(array_key_exists('class', $data)) {
			if(!is_numeric($data['class'])) {
				$result = false;
			}
		} 
		return $result;
	}
	
}