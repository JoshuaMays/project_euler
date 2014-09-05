<?php

$range = 1000000;
$count = 0;
$highCount = 0;

function even($num) {
    return $num / 2;
    
}

function odd($num) {
    return ($num * 3) + 1;
}

for($startNum = 1; $startNum < $range; $startNum++) {
    $num = $startNum;
    $count = 0;

    do {
        if ($num % 2 == 0) {
            $num = even($num);
        }
        else {
            $num = odd($num);
        }
        $count++;
    } while ($num != 1);
    if ($count >= $highCount) {
        $highCount = $count;
        $highNum = $startNum;
    }
}
    echo "The longest sequence contains " . $highCount . " terms." . PHP_EOL;
    echo "The starting number that produces the longest chain is " . $highNum . "." . PHP_EOL;
?>
