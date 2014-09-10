<?php

$chain = 1;
$highChain = 1;
$number = 1;

// N(EVEN) => N/2 
function even($num) {
    return $num / 2;
    
}

// N(ODD) => 3N + 1
function odd($num) {
    return ($num * 3) + 1;
}

// LOOPING FROM 1 TO 999,999 TO FIND THE LONGEST COLLATZ CHAIN
for($startNum = 1; $startNum < 1000000; $startNum++) {
    $num = $startNum;

    // CHECKING IF NUMBER IS EVEN OR ODD AND APPLYING RULE
    while ($num > 1) {
        if ($num % 2 == 0) {
            $num = $num / 2;
        }
        else {
            $num = ($num * 3) + 1;
        }
        // EACH TIME NUM DOES GET BACK TO ONE, INCREMENT THE CHAIN
        $chain++;
    }
    // IF AN EQUAL OR LONGER CHAIN IS FOUND, MAKE IT THE NEW HIGHEST CHAIN
    if ($chain >= $highChain) {
        $highChain = $chain;
        $highNum = $startNum;
    }
    // RESET CHAIN BACK TO ONE FOR NEXT STARTING NUMBER.
    $chain = 1;
}
    echo "The longest sequence contains " . $highChain . " terms." . PHP_EOL;
    echo "The starting number that produces the longest chain is " . $highNum . "." . PHP_EOL;
?>
