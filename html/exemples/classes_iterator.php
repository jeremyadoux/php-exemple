<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 10:54
 */

function my_autoloader($class) {
  include_once 'classes/iterator/' . $class . '.php';
}
spl_autoload_register('my_autoloader');

$ma_class_withtout_iterator = new ma_class_without_iterator();
foreach($ma_class_withtout_iterator as $key => $value) {
  var_dump($key, $value);
}
$ma_class_withtout_iterator->iterateVisible();

$ma_class_with_iterator = new ma_class_with_iterator();
foreach($ma_class_with_iterator as $key => $value) {
  var_dump($key, $value);
}
$ma_class_with_iterator->iterateVisible();