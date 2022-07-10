<?php

session_start();

include_once('init.php');

$pageCanonical = HOST . BASE_URL;
$uri = $_SERVER['REQUEST_URI'];
$badUrl = BASE_URL . 'index.php';

if(strpos($uri, $badUrl) === 0){
	$cname = 'errors/e404';
}

else{
	$routes = include('routes.php');
	$url = $_GET['querysystemurl'] ?? '';
	
	$routerRes = parseUrl($url, $routes);
	$cname = $routerRes['controller'];
	define('URL_PARAMS', $routerRes['params']);

	$urlLen = strlen($url);

	if($urlLen > 0 && $url[$urlLen - 1] == '/'){
		$url = substr($url, 0, $urlLen - 1);
	}

	$pageCanonical .= $url;
}

$pageTitle = $pageContent = '';
$pathToController = "controllers/$cname.php";


if(!file_exists($pathToController)){
	$cname = 'errors/e404';
	$pathToController = "controllers/$cname.php";
}
else{
	include_once($pathToController);
}

include_once($pathToController);
$html = template('v_main', [
	'title' => $pageTitle,
	'content' => $pageContent,
	'canonical' => $pageCanonical
]);

echo $html;
