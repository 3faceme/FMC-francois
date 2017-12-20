<?php


function dd($data)
{
echo '<pre>';
die(var_dump($data));
echo '</pre>';
}

function connectToDb()
{
try{
//Change psswd to **** if working -DONE
return new PDO('mysql:host=127.0.0.1;dbname=myTodo', 'root', '*****');
} catch(PDOException $e){
die($e->getMessage());
}
}

function fetchAllTasks($pdo)
{
$statement = $pdo->prepare('select * from todos');

$statement->execute();

return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}