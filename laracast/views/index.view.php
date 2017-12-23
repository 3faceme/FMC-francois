	<?php require 'partials/head.php'; ?>
	
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

	<?php require 'partials/footer.php'; ?>