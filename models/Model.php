<?php
// model.php

class Model {
	
	public function __construct() 
	{
		
	}

	public	function open_database_connection()
	{
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
		mysql_select_db(DB_NAME, $link);
		
		mysql_query("SET CHARACTER SET 'utf8'", $link);
	
		return $link;
	}
	
	public function close_database_connection($link)
	{
		mysql_close($link);
	}
	
	public function escape_strings($array) 
	{
		$link = $this->open_database_connection();
		
		$data = array();

		//escape user input for sercurity of the database
						
		foreach($array as $key => $value) {
			$data[$key] = mysql_real_escape_string($value, $link);
		}
		
		$this->close_database_connection($link);
		
		return $data;
	}
}