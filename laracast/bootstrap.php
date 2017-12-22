<?

/* 
the bootstrap.php PART that I could not implement because of the exception
127.0.0.1:49348 [500]: /laracast/index.php - Uncaught Error: Call to a member function selectAll() on integer in /home/zebulon/Documents/FlyMyCloud/html.git/laracast/index.php:10
Stack trace:
#0 {main}
  thrown in /home/zebulon/Documents/FlyMyCloud/html.git/laracast/index.php on line 10
** STARTS HERE
*/
require 'database/Connection.php';

require 'database/QueryBuilder.php';

$config = require 'config.php';


	
$query = new QueryBuilder(

Connection::make($config['database']));

// Bootstrap.php ** ENDS HERE

return $query;