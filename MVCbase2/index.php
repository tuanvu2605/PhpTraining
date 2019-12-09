<?php

use Loader\App;

define("PATH_SYSTEM",__DIR__."/");
require_once(PATH_SYSTEM."App.php");
require_once(PATH_SYSTEM."Controller.php");

$app = new App();
$app->controller('user')->index();

?>