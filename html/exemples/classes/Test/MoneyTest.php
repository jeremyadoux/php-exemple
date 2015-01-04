<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 04/01/2015
 * Time: 11:54
 */

include_once("Money.php");

class MoneyTest extends PHPUnit_Framework_TestCase{
  public function testCanBeNegated()
  {
    // Arrange
    $a = new Money(1);

    // Act
    $b = $a->negate();

    // Assert
    $this->assertEquals(-1, $b->getAmount());
  }

} 