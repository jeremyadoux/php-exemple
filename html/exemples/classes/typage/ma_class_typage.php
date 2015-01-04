<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 11:03
 */

class ma_class_typage {
  /**
   * Fonction de test
   *
   * Le premier paramètre doit être un objet de type AutreClasse
   */
  public function test(AutreClasse $autreclasse) {
    echo $autreclasse->var;
  }


  /**
   * Une autre fonction de test
   *
   * Le premier paramètre doit être un tableau
   */
  public function test_array(array $input_array) {
    print_r($input_array);
  }

  /**
   * Le premier paramètre doit être un itérateur
   */
  public function test_interface(Traversable $iterator) {
    echo get_class($iterator);
  }

  /**
   * Le premier paramètre doit être une fonction de rappel (callable)
   */
  public function test_callable(callable $callback, $data) {
    call_user_func($callback, $data);
  }
}

// Un autre exemple de classe
class AutreClasse {
  public $var = 'Bonjour le monde!';
}