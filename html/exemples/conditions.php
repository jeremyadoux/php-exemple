<?php

var_dump("Condition 1");
$a = 12;
$b = 15;
if($a < $b) {
	var_dump("$a plus petit que $b");
}
var_dump("Fin Condition 1");

var_dump("Condition 2");
if($a < $b) {
  var_dump("$a plus grand que $b");
} else {
  var_dump("$a toujours plus petit que $b");
}
var_dump("Fin Condition 2");

var_dump("Condition 3");
$b = 12;
if($a < $b) {
  var_dump("$a plus grand que $b");
} else if ($a == $b) {
  var_dump("$a est égale à $b");
} else {
  var_dump("$a toujours plus petit que $b");
}
var_dump("Fin Condition 3");

//Sans comparaisons des types et des valeurs
var_dump("Condition 4");
$a = 12;
$b = "12";
if($a == $b) {
  var_dump("et oui c'est égale");
}
var_dump("Fin Condition 4");

//Comparaison des types et des valeurs
var_dump("Condition 5");
$a = 12;
$b = "12";
if($a === $b) {
  var_dump("et oui c'est égale");
} else {
  var_dump("non ce n'est pas égale car on compare aussi les types");
}
var_dump("Fin Condition 5");

// Le switch
var_dump("Condition 6");
$my_var = "test";
switch ($my_var) {
	case "test":
    var_dump("ceci est un test");
	case "plop":
    var_dump("ceci est un plop");
	default :
    var_dump("rien à dire c'est du défaut");
}
var_dump("Fin Condition 6");

var_dump("Condition 7");
switch ($my_var) {
	case "test":
    var_dump("ceci est un test");
		break;
	case "plop":
    var_dump("ceci est un plop");
		break;
	default :
    var_dump("rien à dire c'est du défaut");
		break;
}
var_dump("Fin Condition 7");

//Synthaxe alternative if
var_dump("Condition 8");
$my_var = 12;

var_dump(($my_var == 12) ? "ok" : "nok");
var_dump("Fin Condition 8");

