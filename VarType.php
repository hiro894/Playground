<?php
class Controller
{
    function echoText()
    {
        echo "HELLO!!!!!";
    }
}

$arr = [
    true,
    1,
    0.3,
    "OK",
    [1, 2],
    ["a"=>1, "b"=>2],
    new Controller,
    fopen("test.txt", "r"),
    NULL
];

foreach($arr as $val){
    var_dump($val);
    echo "\n";
}
