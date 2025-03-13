<?php
    //Lets talk about filter_var too!
    $number = intval(readline());
    if($number % 2 == 0) printCountDown($number);
    else printCountDown($number,1);

    function printCountDown(int $number,int $limit = 0): void {
        $con = $number;
        while($con > $limit) {
            if($limit == 0 && $con%2 === 0) echo $con.PHP_EOL;
            else if($limit === 1 && $con&1 === 1) echo $con.PHP_EOL;
            --$con;
        }
        echo $limit.PHP_EOL; 
    }
?>