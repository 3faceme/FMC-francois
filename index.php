<?php

//$query = require 'bootstrap.php';

require 'Task.php';


/* START PDO TASK */

require 'database/Connection.php';

require 'database/QueryBuilder.php';


	
$query = new QueryBuilder(Connection::make());

$tasks = $query->selectAll('todos');

require 'index.view.php'; 




