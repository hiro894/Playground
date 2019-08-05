<?php

function getValue(){
    return 123.456789;
}
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$val = getValue();
$foo = new foo();
$name = 'MyName';

$hereDoc = <<< EOD
Hello World!
Hoge Hoge
Foo Bar
Yahoo!
!"#$%&'()0=~|\n
name = $name
foo->foo = $foo->foo
foo->array = {$foo->bar[1]}
getValue = {getValue()}
getValue = $val\n
EOD;

echo $hereDoc;
