<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 10:09
 */

class ma_class_constructor_singleton {
  private static $instance;
  private $var = array();

  private function __construct() {
    var_dump("ma class enfant constructor");
  }

  public static function singleton() {
    if(!isset(self::$instance)) {
      $c = __CLASS__;
      self::$instance = new $c();
    }
    return self::$instance;
  }

  public function setVar($value) {
    $this->var[] = $value;
  }

  public function getVar() {
    return $this->var;
  }
} 