<?php
$foo = 0.1;
$bar = 0.7;

echo $foo+$bar."\n";

$too = ($foo+$bar);

echo (($foo+$bar)*10)."\n";
echo (floor(($foo+$bar)*10))."\n";
echo (floor(bcadd($foo,$bar)*10))."\n";
