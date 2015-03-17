<?php
session_start();
// index.php 

require_once 'config/configuration.php';

// load models
require_once 'models/Model.php';
require_once 'models/ProjectModel.php';

// load controllers
require_once 'controllers/Controller.php';
require_once 'controllers/PagesController.php';
require_once 'controllers/EmailController.php';

// load helpers
require_once 'views/helpers/HtmlHelper.php';

// route the request internally
$uri = $_SERVER['PHP_SELF'];

// note $path var is set in .htaccess file
$url = $_GET['path'];

$urlArray = callHook();

new Controller($uri);

$pages = new PagesController();
$mail  = new EmailController();

if ($urlArray['controller'] == 'pages' && $urlArray['action'] == 'projects') {

	$pages->projects_action($urlArray['queryString'][0]);	
										
} elseif($urlArray['controller'] == 'pages' && $urlArray['action'] == '404') {

    $pages->error404_action($urlArray['queryString'][0]);
 
} elseif($urlArray['controller'] == 'email' && $urlArray['action'] == 'send') {

    $mail->send_action();

} else {
	
	// redirect in nearly all cases to the home page
    $pages->home_action();	

    // header('Status: 404 Not Found');
    // echo '<html><body><h1>Page Not Found</h1></body></html>';
}

/** Main Call Function **/
 
function callHook() {
    global $url;
 
    $urlArray = array();
    $urlArray = explode("/",$url);
 
    $controller = $urlArray[0];
    array_shift($urlArray);
    $action = $urlArray[0];
    array_shift($urlArray);
    $queryString = $urlArray;
 
    $controllerName = $controller;
    $controller = ucwords($controller);
    $model = rtrim($controller, 's');
    
    $array = array(
    	'controller' => $controllerName,
    	'action' => $action,
    	'queryString' => $queryString
	 );

    return $array;
}