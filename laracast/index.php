<?php

$query = require 'core/bootstrap.php';

require 'Task.php';

//die(var_dump($app));

require Router::load('routes.php')
	->direct(Request::uri()); 






