<?php


class Connection{

	public static function make()
	{
		try{
		//Change psswd to **** if working -DONE
		return new PDO('mysql:host=127.0.0.1;dbname=myTodo', 'root', '1allig427');
		} catch(PDOException $e){
		die($e->getMessage());
		}
	}
	
}