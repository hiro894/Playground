<?php

function FunctionArgs($foo=null,$bar=null){
    echo "foo = $foo,bar = $bar \n";
}

FunctionArgs('hoge','hoge2');
FunctionArgs('hoge');
FunctionArgs('hoge',null);
FunctionArgs(null,'hoge2');
