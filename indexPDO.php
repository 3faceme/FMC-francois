<?php

require 'functions.php';
require "Task.php";



/* START PDO TASK */


$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);


require 'index.view.php'; 




