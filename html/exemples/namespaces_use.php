<?php
include_once 'namespaces/ma_class_namespace.php';
include_once 'namespaces/ma_class_sub_namespace.php';

use \Foo\Bar\MaClass as maClass;

$classNameSpace = new maClass\ma_class_namespace();
var_dump($classNameSpace->test());
var_dump($classNameSpace->returnSubTest());