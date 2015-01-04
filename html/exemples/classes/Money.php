<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 04/01/2015
 * Time: 11:53
 */

class Money {
  private $amount;

  public function __construct($amount)
  {
    $this->amount = $amount;
  }

  public function getAmount()
  {
    return $this->amount;
  }

  public function negate()
  {
    return new Money(-1 * $this->amount);
  }
} 