<?php
    /*We use (int), (integer) or intval() functions to convert a value to an integer */
    //cast float to int
    $int  = 10.234;
    $int_cast = (int)$int;
    echo $int_cast;

    echo "</br>";

    //cast string to int 
    $x = "32.432423";
    $int_cast = (int)$x;
    echo $int_cast;

?>