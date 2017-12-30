<?php


// Composer autoloading here: 

require 'vendor/autoload.php';

$query = require 'core/bootstrap.php';

require 'Task.php';

Router::load('routes.php')
	->direct(Request::uri(), Request::method()); 






