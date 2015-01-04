<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 10:43
 */

class ma_class_overloading {
  /**  Variable pour les données surchargées.  */
  private $data = array();

  /**  La surcharge n'est pas utilisée sur les propriétés déclarées.  */
  public $declared = 1;

  /**  La surcharge n'est lancée que lorsque l'on accède à cette propriété depuis l'extérieur de la classe.  */
  private $hidden = 2;

  public function __set($name, $value)
  {
    echo "Définition de '$name' à la valeur '$value'\n";
    $this->data[$name] = $value;
  }

  public function __get($name)
  {
    echo "Récupération de '$name'\n";
    if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
    }
  }

  public function __isset($name)
  {
    echo "Est-ce que '$name' est défini ?\n";
    return isset($this->data[$name]);
  }

  public function __unset($name)
  {
    echo "Effacement de '$name'\n";
    unset($this->data[$name]);
  }

  /**  Ce n'est pas une méthode de surcharge, nécessaire ici que pour l'exemple.  */
  public function getHidden()
  {
    return $this->hidden;
  }
} 