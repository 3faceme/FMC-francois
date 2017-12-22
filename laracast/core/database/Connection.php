<?php


class Connection{

	public static function make($config)
	{
		try{
		//Change psswd to **** if working -DONE
		//return new PDO('mysql:host=127.0.0.1;dbname=myTodo', 'root', '******');
		
				return new PDO(
$config['connection'].';dbname='.$config['name'],
$config['username'],
$config['password'],
$config['options']

				);
		} catch(PDOException $e){
		die($e->getMessage());
		}
	}
	
}