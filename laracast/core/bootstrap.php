<?php

//the bootstrap.php PART that I could not implement because of the exception ** STARTS HERE


$app = [];


$app['config'] = require 'config.php';


	
$app['database'] = new QueryBuilder(

Connection::make($app['config']['database']));

// Bootstrap.php ** ENDS HERE