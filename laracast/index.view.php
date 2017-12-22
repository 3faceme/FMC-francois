	<!DOCTYPE html>
	
	<html lang="en">
	<head>
	
	<meta charset="UTF-8">
	<title>Document</title>
	</head>
	<body>
	<ul>
<?php foreach($tasks as $task) : ?>

<li>
<?php if($task->completed) : ?>	
<strike>
<strong><?= $task->description ?></strong></li>
</strike>
<?php else : ?>
<strong><?= $task->description ?></strong></li>
<?php endif; ?>
<?php endforeach; ?>
</ul>

	</body>
	</html>