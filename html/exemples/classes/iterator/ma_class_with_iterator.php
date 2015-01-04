<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 10:52
 */

class ma_class_with_iterator implements Iterator {
  public $var = array("coucou", "World", "php", "!");
  public $var2 = 5;
  public $var3 = "test";

  protected $protected = 'variable protégée';
  private   $private   = 'variable privée';

  function iterateVisible() {
    echo "MyClass::iterateVisible:\n";
    foreach($this as $key => $value) {
      var_dump($key, $value);
    }
  }

  public function rewind()
  {
    echo "rembobinage\n";
    reset($this->var);
  }

  public function current()
  {
    $var = current($this->var);
    echo "actuel : $var\n";
    return $var;
  }

  public function key()
  {
    $var = key($this->var);
    echo "clé : $var\n";
    return $var;
  }

  public function next()
  {
    $var = next($this->var);
    echo "suivant : $var\n";
    return $var;
  }

  public function valid()
  {
    $key = key($this->var);
    $var = ($key !== NULL && $key !== FALSE);
    echo "valide : $var\n";
    return $var;
  }
} 