<?php
    //TODO: what about negative numbers?
    //Lets talk about filter_var too!
    $number = intval(readline());
    if($number % 2 == 0) printCount($number);
    else printCount($number,1);

    function printCount(int $number,int $limit = 0): void {
        $con = $number;
        while($con > $limit) {
            //Sure we can refactor that
            if($limit == 0 && $con%2 === 0) echo $con.PHP_EOL;
            else if($limit === 1 && $con&1 === 1) echo $con.PHP_EOL;
            --$con;
        }
        echo $limit.PHP_EOL; 
    }
?>