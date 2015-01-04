<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 10:10
 */

class ma_class_constructor {
  private $var = array();

  public function __construct() {
    var_dump('contructor class');
  }

  public function setVar($value) {
    $this->var[] = $value;
  }

  public function getVar() {
    return $this->var;
  }
} 