<?php
require __DIR__ . '/vendor/autoload.php';
use Root\Html\Worker;

echo "Hei";

$worker = new Worker();
$worker->work();