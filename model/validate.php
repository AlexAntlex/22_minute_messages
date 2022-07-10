<?php
    function articleValidate(array &$fields) : array{
        $errors = [];
        if($fields['title'] === '' || $fields['content'] === ''){
			$errors[] = 'You need to fill in all the fields!';
    }

    $fields['title'] = htmlspecialchars($fields['title']);
    $fields['content'] = htmlspecialchars($fields['content']);
      
    return $errors;
}
?>