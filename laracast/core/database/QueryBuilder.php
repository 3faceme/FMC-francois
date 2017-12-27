<?php

class QueryBuilder
{

public $pdo;

public function __construct($pdo)
{
$this->pdo = $pdo;
}
public function selectAll($table)
{
	$statement = $this->pdo->prepare('select * from ' . $table);

$statement->execute();

return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); 
}

public function insert($table, $parameters){


//die(var_dump(array_keys($parameters)));

$sql = sprintf('insert into %s (%s) values (%s)',
 $table,
 implode(', :', array_keys($parameters)),
 ':' . implode(', :', array_keys($parameters))
);

try{
//	die(var_dump($sql));
$statement = $this->pdo->prepare($sql);

$statement->execute($parameters);
}
catch(Exception $e){
die('Whoops, Something went wrong!');
}
}
	

}