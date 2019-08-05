<?php
class Foo {

  public $a;
  public $b;
  public $c = 'xyz';
  public $d;

  public function __construct() {
     $a = "000";
     $this->b = "123";
  }

  public function sayHello() {
    echo "Hello World!!\n";
  }

}

$bar = new Foo();

$bar -> sayHello();
$bar -> d = 'abc';

echo $bar -> a."\n";
echo $bar -> b."\n";
echo $bar -> c."\n";
echo $bar -> d."\n";
