<?php

//the bootstrap.php PART that I could not implement because of the exception ** STARTS HERE


$app = [];

require 'core/Router.php';

require 'core/Request.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

$app['config'] = require 'config.php';


	
$app['database'] = new QueryBuilder(

Connection::make($app['config']['database']));

// Bootstrap.php ** ENDS HERE