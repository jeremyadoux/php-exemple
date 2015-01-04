<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 10:51
 */

class ma_class_without_iterator {
  public $var = array("coucou", "World", "php", "!");
  public $var2 = 5;
  public $var3 = "test";

  protected $protected = 'variable protégée';
  private   $private   = 'variable privée';

  function iterateVisible() {
    var_dump("MyClass::iterateVisible:");
    foreach($this as $key => $value) {
      var_dump($key, $value);
    }
  }
} 