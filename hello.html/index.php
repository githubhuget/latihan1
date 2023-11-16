<?php

var_dump (1 < 5) ;
    echo "</br>";
var_dump (2 > 5) ;
    echo "</br>";
var_dump (3 <= 5) ;
    echo "</br>";
var_dump (4 >= 5) ;
    echo "</br>";
var_dump (5 == 5) ;
    echo "</br>";
var_dump (6 != 5) ;
    echo "</br>";   


var_dump (1 === "1");
var_dump (2 !== "2");

$x = 10;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x % 2 === 0|| $x % 5 === 0);