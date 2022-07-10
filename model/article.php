<?php

include_once('core/db.php');

// вывод всех статей
function articlesAll() : array{
	$sql = "SELECT * FROM articles";
	$query = dbQuery($sql);
	return $query->fetchAll();
}

// добавление статьи
function articleAdd(array $fields) : bool{
	$sql = "INSERT articles (title, content, img_path) VALUES (:title, :content, :img_path)";
	dbQuery($sql, $fields);
	return true;
}


function articleOne(int $id) : array{
	$sql = "SELECT * FROM articles WHERE id=:id";
	$query = dbQuery($sql, ['id' => $id]);
	return $query->fetch();
}

function oldMessages() : array{
	$arrId = [];
	$sql = "SELECT img_path FROM articles WHERE dt < now() - interval (60*22) second";
	$arrId = dbQuery($sql);
	$arrId = $arrId->fetch();
	if(gettype($arrId) === 'boolean'){
		return [];
	}
	else{
		return $arrId;
	}
}

function dtDelete($arrId) : bool{
	if($arrId !== null){
		foreach($arrId as $id){
			unlink($id);
		}
		$sql = ("DELETE FROM articles WHERE dt < now() - interval (60*22) second");
		dbQuery($sql);
	}
	return true;
}