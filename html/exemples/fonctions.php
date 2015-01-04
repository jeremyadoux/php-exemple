<?php

//Déclaration d'une fonction simple
function ma_func() {
	return "ok";
}
//appelle de la fonction
var_dump(ma_func());

//Function avec des arguments
function ma_func_arg($arg1, $arg2) {
	return ($arg1 > $arg2);
}

//Test de la fonction
if(ma_func_arg(12, 10)) {
  var_dump("12 est plus grand que 10");
}

if(ma_func_arg(10, 12)) {
  var_dump("10 est plus grand que 12");
} else {
  var_dump("10 n'est pas plus grand que 12");
}


//Les fonctions variables
function foo() {
  var_dump("dans foo()<br />\n");
}

function bar($arg = '')
{
  var_dump("Dans bar(); l'argument était '$arg'.<br />\n");
}

// Ceci est une fonction détournée de echo
function echoit($string)
{
  var_dump($string);
}

$func = 'foo';
$func();        // Appel foo()

$func = 'bar';
$func('test');  // Appel bar()

$func = 'echoit';
$func('test');  // Appel echoit()

// Les fonctions anonymes
$greet = function($name)
{
    printf("Bonjour %s\r\n", $name);
};

$greet('World');
$greet('PHP');

// Passage de variable en référence à une fonction
function ma_func_ref(&$arg1) {
	foreach($arg1 as $key => $value) {
		$arg1[$key] = $value . " ref ajouter";
	}
}

//appel de la fonction
//Init de la variable array à passer à la fonction
$my_ar_var = array("test", "test1", "test2");
ma_func_ref($my_ar_var);

var_dump($my_ar_var);