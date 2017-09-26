<?php

$pathViews = __DIR__.'/../../src/Blog/Resources/views';

switch ($_SERVER['REQUEST_URI']) {
	case '/':
		$view = $pathViews.'/home.php';
		break;
	case '/admin':
		$view = $pathViews.'/admin.php';
		break;
}