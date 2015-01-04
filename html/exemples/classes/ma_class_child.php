<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 09:48
 */
include_once("ma_class_parent.php");

class ma_class_child extends ma_class_parent {
  public function getHtml($template)
  {
    foreach($this->vars as $name => $value) {
      $template = str_replace('#' . $name . '#', $value, $template);
    }

    return $template;
  }

  public function showConstant() {
    return self::CONSTANT;
  }
} 