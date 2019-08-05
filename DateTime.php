<?php
$val = '2019-09-02 12:34:56';

echo $val."\n";

echo date( 'y-m-d' , strtotime($val))."\n";
echo date( 'Y-m-d' , strtotime($val))."\n";

