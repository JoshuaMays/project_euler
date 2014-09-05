<?php

$chain = 1;
$highChain = 1;
$number = 1;

function even($num) {
    return $num / 2;
    
}

function odd($num) {
    return ($num * 3) + 1;
}

for($startNum = 1; $startNum < 1000000; $startNum += 2) {
    $num = $startNum;

    while ($num > 1) {
        if ($num % 2 == 0) {
            $num = $num / 2;
        }
        else {
            $num = ($num * 3) + 1;
        }
        $chain++;
    }
    if ($chain >= $highChain) {
        $highChain = $chain;
        $highNum = $startNum;
    }
    $chain = 1;
}
    echo "The longest sequence contains " . $highChain . " terms." . PHP_EOL;
    echo "The starting number that produces the longest chain is " . $highNum . "." . PHP_EOL;
?>
