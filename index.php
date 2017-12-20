<?php

require 'functions.php';

$task = [
'title' =>'Finish homework',
'due' => 'today',
'assigned_to' => 'Jeffrey',
'completed' => true
];

require "Task.php";

//$taskobject = new Task("Goto the store once more");

$taskarray = [
new Task('Go to the store'),
new Task('Finish my screencast'),
new Task('Clean my room')
];

// echo $taskobject->getComplete();

//$taskobject->setComplete(true);


//dd($taskarray);
$taskarray[0]->setComplete(true);

require 'index.view.php'; 




