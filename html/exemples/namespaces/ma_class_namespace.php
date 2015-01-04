<?php
/**
 * Created by PhpStorm.
 * User: j.adoux
 * Date: 03/01/2015
 * Time: 11:16
 */
namespace Foo\Bar\MaClass;

class ma_class_namespace {
  const FOO = 1;

  public function test() {
    return "plop";
  }

  public function returnSubTest() {
    $ma_class2 = new sub\ma_class_sub_namespace();
    return $ma_class2->test();
  }
} 