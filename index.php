<?php
define("START", microtime(true));

require "vendor/autoload.php";
require "config.php";


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$app = new App();

?>
