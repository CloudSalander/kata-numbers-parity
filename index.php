<?php
    //Lets talk about filter_var too!
    $number = intval(readline());
    if($number % 2 == 0) printEvens($number);
    else printOdds($number,1);

    function printEvens(int $number): void {
        for($con = $number; $con >= 0; --$con) {
            if($con % 2 == 0) echo $con.PHP_EOL;
        }
    }

    function printOdds(int $number): void {
        for($con = $number; $con >= 1; --$con) {
            if($con % 2 != 0) echo $con.PHP_EOL;
        }
    }
  ?>