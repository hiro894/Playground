<?php
function aaa(){
    global $whoami;

    echo $whoami;
    return "Hello";
}

$whoami = 'John';

define('GREETING',aaa());
define('HOGE', 'hoge');

const FUGA = 'fuga';

echo FUGA."\n".GREETING."\n".aaa()."\n";

$whoami = 'Tom';

echo FUGA."\n".GREETING."\n".aaa()."\n";

echo dirname(__DIR__)."\n";

echo false;
echo "\n";
echo TURE;
echo "\n";
