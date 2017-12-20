	<!DOCTYPE html>
	
	<html lang="en">
	<head>
	
	<meta charset="UTF-8">
	<title>Document</title>
	</head>
	<body>
	<ul>
<?php foreach($taskarray as $task) : ?>

<li>
<?php if($task->getComplete()) : ?>	
<strike>
<strong><?= $task->getDescription() ?></strong></li>
</strike>
<?php else : ?>
<strong><?= $task->getDescription() ?></strong></li>
<?php endif; ?>
<?php endforeach; ?>
</ul>

	</body>
	</html>