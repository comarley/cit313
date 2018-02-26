<?php
function autofiles($class) {
require_once('application/'.$class.'.class.php');
require_once('application/controllers/'.$class.'.class.php');
require_once('application/models/'.$class.'.class.php');
}

spl_autoload_register('autofiles');

new Controller();
 ?>
