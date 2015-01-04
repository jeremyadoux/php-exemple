<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 10:31
 */

abstract class ma_class_abstract_parent {
  // Force les classes filles à définir cette méthode
  abstract protected function getValue();
  abstract protected function prefixValue($prefix);

  // méthode commune
  public function printOut() {
    var_dump($this->getValue());
  }
} 