<?php
//Initialisation d'un array pour jouer avec
$ar_var = array(
	"ma valeur 1",
	"ma valeur 2",
	"ma_valeur 3",
	"ma valeur 4",
);

//Boucle foreach
var_dump("boucle 1");
foreach($ar_var as $value) {
	var_dump($value);
}
var_dump('Fin boucle 1');

// boucle for
var_dump("boucle 2");
for($i=0;$i < count($ar_var); $i++) {
	var_dump($ar_var[$i]);
}
var_dump('Fin boucle 2');

//Boucle while
var_dump("boucle 3");
$i = 1;
while ($i <= 10) {
    var_dump($i++);  /* La valeur affich�e est $i avant l'incr�mentation
                   (post-incr�mentation)  */
}
var_dump('Fin boucle 3');

//Initialisation d'un array pour jouer avec
var_dump("boucle 4");
$ar_var = array(
	"makey 1" => "ma valeur 1",
	"makey 2" => "ma valeur 2",
	"makey 3" => "ma_valeur 3",
	"makey 4" => "ma valeur 4",
);
// Boucle foreach avec lecture de la cl�
foreach($ar_var as $key => $value) {
	var_dump("$key => $value");
}
var_dump('Fin boucle 4');