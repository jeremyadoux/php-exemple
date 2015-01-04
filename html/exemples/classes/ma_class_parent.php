<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 09:48
 */
include_once("ma_class_interface.php");

class ma_class_parent implements ma_class_interface {
  const CONSTANT = 'valeur constante';

  protected $vars = array();

  public function setVariable($name, $var)
  {
    $this->vars[$name] = $var;
  }

  public function getHtml($template)
  {
    foreach($this->vars as $name => $value) {
      $template = str_replace('{' . $name . '}', $value, $template);
    }

    return $template;
  }

  private function showConstant() {
    return self::CONSTANT;
  }
} 