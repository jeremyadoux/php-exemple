<?php
function my_autoloader($class) {
  include_once 'classes/' . $class . '.php';
}
spl_autoload_register('my_autoloader');