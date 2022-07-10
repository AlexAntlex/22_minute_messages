<?php

return (function(){
	$intGT0 = '[1-9]+\d*';
	$normUrl = '[0-9aA-zZ_-]+';

	return [
		[
			'test' => '/^$/',
			'controller' => 'all'
		],
		[
			'test' => '/^add\/?$/',
			'controller' => 'add'
		],
		[
			'test' => "/^message\/($intGT0)\/?$/",
			'controller' => 'article',
			'params' => ['id' => 1]
		]
];
})();