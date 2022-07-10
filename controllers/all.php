<?php

include_once('init.php');

addVisitLog();

dtDelete(oldMessages());
$articles = articlesAll();
$template = 'v_index';

$alertAdded = false;

$pageTitle = 'All articles';
$pageContent = template("$template", [
	'articles' => $articles,
	'alertAdded' => $alertAdded
]);
