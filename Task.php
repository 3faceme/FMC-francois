<?php

class Task
{
		protected $description;
protected $completed = false;

public function __construct($description) 
{
$this->description = $description;
}

public function getComplete()
{
return $this->completed;
}

public function setComplete($completed)
{
			$this->completed = $completed;
}

public function getDescription()
{
return $this->description;
}

public function setDescription($description)
{
			$this->description = $description;
}	
}