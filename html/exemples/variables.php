<?php
/***************
Typages faibles
****************/
//Variable string
$my_var = "Je suis un string";
var_dump(gettype($my_var));

//Maintenant variable int
$my_var = 12;
var_dump(gettype($my_var));

//Maintenant un float
$my_var = $my_var + 1.2;
var_dump(gettype($my_var));

$foo = "0";                     // $foo est une chaîne de caractères (ASCII 48)
var_dump(gettype($foo));
$foo += 2;                      // $foo est maintenant un entier (2)
var_dump(gettype($foo));
$foo = $foo + 1.3;              // $foo est maintenant un nombre à virgule flottante (3.3)
var_dump(gettype($foo));
$foo = 5 + "10 Little Piggies"; // $foo est un entier (15)
var_dump(gettype($foo));
$foo = 5 + "10 Small Pigs";     // $foo est un entier (15)
var_dump(gettype($foo));


// Sensible à la casse
$var = 'Jean';
$Var = 'Paul';
var_dump($var);			//affiche "Jean"
var_dump($Var);         // affiche "Paul"

// La concaténation
$string1 = "Bonjour";
$string2= "PHP";
var_dump($string1 . " ". $string2);
 
// Les opérations
$string1 = "Bonjour";
$string2 .= " PHP";
var_dump($string2);

$int = 0;
$int++;
var_dump($int);

$int += 10;
var_dump($int);

$int -= 5;
var_dump($int);

// La différence entre " et '
$my_var = "12";

$string1 = "Cela fait $my_var €";
$string2 = 'Cela fait $my_var €';

var_dump($string1);
var_dump($string2);

//CAS Spéciaux avec les guillemets
var_dump("Cela fait \r\n un retour à la ligne");
var_dump('Cela ne fait pas \r\n de retour à la ligne');

//Caractères d'échappement /
$string1 = "Cela fait \"12\" €";
var_dump($string1);

//Synthaxe heredoc
$string1 = <<<MA_KEY
Voici mon string avec plein de " et ' sans aucun /
MA_KEY;
var_dump($string1);

// Des arrays
$ar_var = array();
var_dump($ar_var);

$ar_var = array(12, "coucou", 1.25);
var_dump($ar_var);

$ar_var = array(
"une clé" => 12,
25 => "coucou",
"et oui" => 1.25);
var_dump($ar_var);

//Ajout
$ar_var[] = "encore une entrée";
var_dump($ar_var);

//Edition
$ar_var["une clé"] = 24;
var_dump($ar_var);

//Suppression
unset($ar_var[25]);
var_dump($ar_var);

// Objets simple
$oj_var = new stdClass();
$oj_var->var1 = "test";
$oj_var->var2 = 24;

var_dump($oj_var->var1);
var_dump($oj_var->var2);