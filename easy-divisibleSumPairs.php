<?php
/* Given an array of integers and a positive integer k, determine the number of (i,j) pairs where i < j and ar[i] + ar[j] is divisible by k */

function divisibleSumPairs($n, $k, $ar) {
    $contador = 0;
    foreach ($ar as $el) {
        array_shift($ar);

        foreach ($ar as $el2) {
            $par = $el + $el2;
            if ($par % $k === 0) {
                $contador++;
            }
        }
    }
    return $contador;
}

echo(divisibleSumPairs(6, 5, [1, 2, 3, 4, 5, 6])); /* 3 */
echo("\n");
echo(divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2])); /* 5 */