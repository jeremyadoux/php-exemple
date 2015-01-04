<?php
include_once 'namespaces/ma_class_namespace.php';
include_once 'namespaces/ma_class_sub_namespace.php';

var_dump(\Foo\Bar\MaClass\ma_class_namespace::FOO);

$classNameSpace = new \Foo\Bar\MaClass\ma_class_namespace();
var_dump($classNameSpace->test());
var_dump($classNameSpace->returnSubTest());