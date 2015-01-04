<?php
function my_autoloader($class) {
  include_once 'classes/' . $class . '.php';
}
spl_autoload_register('my_autoloader');

$ma_class1 = new ma_class_constructor();
$ma_class1->setVar("test");
$ma_class1->setVar("test2");
var_dump($ma_class1->getVar());
$ma_class2 = new ma_class_constructor();
$ma_class2->setVar("test3");
$ma_class2->setVar("test4");
var_dump($ma_class2->getVar());

//$mon_singleton1 = new ma_class_constructor_singleton(); //Emet une erreure car le construct est private
$mon_singleton2 = ma_class_constructor_singleton::singleton();
$mon_singleton2->setVar("test1");
$mon_singleton2->setVar("test2");
var_dump($mon_singleton2->getVar());
$mon_singleton3 = ma_class_constructor_singleton::singleton();
$mon_singleton3->setVar("test3");
$mon_singleton3->setVar("test4");
var_dump($mon_singleton3->getVar());
var_dump($mon_singleton2->getVar());