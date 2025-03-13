<?php
    //Lets talk about filter_var too!
    $number = intval(readline());
    //Maybe too smart way to say if a number is even :P
    if($number&1 === 0) printCountDown($number);
    else printCountDown($number,1);

    function printCountDown(int $number,int $limit = 0): void {
        var_dump($limit);
    }
?>