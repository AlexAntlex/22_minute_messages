<?php

	include_once('init.php');

	// Создание или добавление лога
	addVisitLog();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$fields = extractFields($_POST, ['title', 'content']);
	$validateErrors = articleValidate($fields);	

	foreach (ALLOW as $item){
   	if(preg_match("/$item\$/i", $_FILES['img']['name'])) { 
  		$size = $_FILES['img']['size'];
  		if ($size < 10485760) { 
			$fname = BASE_IMG_PATH . mt_rand(256, 100000) . $item;
			copy($_FILES['img']['tmp_name'], $fname);
			$fields['img_path'] = $fname;
		}

	}
}
	if(empty($validateErrors)){
		articleAdd($fields);
		$_SESSION['articles.added'] = true;
		header('Location: ' . BASE_URL);
		exit();
	}
}
else{
	$fields = ['title' => '', 'content' => ''];
	$validateErrors = [];
}

$pageTitle = 'Add message';
$pageContent = template('v_add', [
	'fields' => $fields,
	'validateErrors' => $validateErrors
]);
