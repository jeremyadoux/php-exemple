<?php
function my_autoloader($class) {
  var_dump($class);
  include_once 'classes/' . $class . '.php';
}
spl_autoload_register('my_autoloader');

$ma_class = new ma_class_child();
$ma_class->setVariable("name","jadoux");
var_dump($ma_class->getHtml("Coucou je m'appelle #name#"));
var_dump($ma_class->showConstant()); //n'emet pas une erreur car c'est une public puisqu'on a surchargé la classe parent

$ma_class_parent = new ma_class_parent();
$ma_class_parent->setVariable("name","jadoux");
var_dump($ma_class_parent->getHtml("Coucou je m'appelle {name}"));
//var_dump($ma_class_parent->vars); //Emet une erreur car c'est une protected seul les classes enfants peuvent y accéder
//var_dump($ma_class_parent->showConstant()); //Emet une erreur car c'est une private