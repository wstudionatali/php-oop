<?php
require __DIR__ . '/vendor/autoload.php';

use Root\Html\Worker;
use Root\Html\DatabaseConnection;



// $worker = new Worker();
// $worker->work();

$db = DatabaseConnection::getInstance();
$connection = $db->getConnection();
$stmt = $connection->query('select* from `TABLES`');
$row = $stmt->fetch();
print_r($row);