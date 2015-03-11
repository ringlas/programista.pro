<?php
session_start();
// index.php 

require_once 'config/configuration.php';

// load models
require_once 'models/Model.php';

// load controllers
require_once 'controllers/Controller.php';
require_once 'controllers/PagesController.php';

// load helpers
require_once 'views/helpers/HtmlHelper.php';

// route the request internally
$uri = $_SERVER['PHP_SELF'];

new Controller($uri);

$pages = new PagesController();

if (SITE_ROOT . '/index.php' == $uri) {
	
	$pages->home_action();	
										
} else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}

