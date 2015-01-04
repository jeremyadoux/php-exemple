<?php
function my_autoloader($class) {
  include_once 'classes/' . $class . '.php';
}
spl_autoload_register('my_autoloader');

$ma_class = new ma_class_use_trait();
var_dump($ma_class->sayHello());