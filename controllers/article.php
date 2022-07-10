<?php

	include_once('init.php');
	
	addVisitLog();

$id = (int)URL_PARAMS['id'];

$article = articleOne($id);
$hasMsg = $article !== false;

if($hasMsg){

	$pageTitle = $article['title'];
	$pageContent = template('v_article', [
		'article' => $article,
	]);
}

else{
	header('HTTP/1.1 404 Not Found');
	$pageContent = template('errors/v_404');
}

?>
