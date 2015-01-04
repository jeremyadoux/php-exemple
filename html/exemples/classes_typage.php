<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 11:06
 */
function myErrorHandler($errno, $errstr, $errfile, $errline) {
  if ( E_RECOVERABLE_ERROR===$errno ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
  }
  return false;
}
set_error_handler('myErrorHandler');

include_once("classes/typage/ma_class_typage.php");

// Une instance de chaque classe
$maclasse = new ma_class_typage;
$autreclasse = new AutreClasse;

// Erreur fatale : Argument 1 doit être un objet de la classe AutreClasse
try {
  $maclasse->test('salut');
} catch (Exception $e) {
  var_dump("Pas le bon type :: ".$e->getMessage());
}

// Erreur fatale : Argument 1 doit être une instance de AutreClasse
try {
  $foo = new stdClass;
  $maclasse->test($foo);
} catch (Exception $e) {
  var_dump("Pas le bon type :: ".$e->getMessage());
}

// Erreur fatale : Argument 1 ne doit pas être null
try {
  $maclasse->test(null);
} catch (Exception $e) {
  var_dump("Pas le bon type :: ".$e->getMessage());
}

// Fonctionne : Affiche 'Bonjour le monde!'
try {
  $maclasse->test($autreclasse);
} catch (Exception $e) {
  var_dump("Pas le bon type :: ".$e->getMessage());
}

// Erreur fatale : Argument 1 doit être un tableau
try {
  $maclasse->test_array('a string');
} catch (Exception $e) {
  var_dump("Pas le bon type :: ".$e->getMessage());
}

// Fonctionne : Affiche le tableau
try {
  $maclasse->test_array(array('a', 'b', 'c'));
} catch (Exception $e) {
  var_dump("Pas le bon type :: ".$e->getMessage());
}

// Fonctionne : Affiche ArrayObject
try {
  $maclasse->test_interface(new ArrayObject(array()));
} catch (Exception $e) {
  var_dump("Pas le bon type :: ".$e->getMessage());
}

// Fonctionne : Affiche int(1)
try {
  $maclasse->test_callable('var_dump', 1);
} catch (Exception $e) {
  var_dump("Pas le bon type :: ".$e->getMessage());
}