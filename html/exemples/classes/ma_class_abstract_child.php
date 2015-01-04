<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 10:32
 */

class ma_class_abstract_child extends ma_class_abstract_parent {
  protected function getValue() {
    return "ConcreteClass1";
  }

  public function prefixValue($prefix) {
    return "{$prefix}ConcreteClass1";
  }
} 