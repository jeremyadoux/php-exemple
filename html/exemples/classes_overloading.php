<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 10:45
 */
function my_autoloader($class) {
  include_once 'classes/' . $class . '.php';
}
spl_autoload_register('my_autoloader');

$obj = new ma_class_overloading();

$obj->a = 1;
var_dump($obj->a);

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));

var_dump($obj->declared);

var_dump("Manipulons maintenant la propriété privée nommée 'hidden' :");
var_dump("'hidden' est visible depuis la classe, donc __get() n'est pas utilisée...");
var_dump($obj->getHidden());
var_dump("'hidden' n'est pas visible en dehors de la classe, donc __get() est utilisée...");
var_dump($obj->hidden);