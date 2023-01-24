<?php

function formingMagicSquare($s) {
    // Write your code here
    $costs = array_fill(0, 8, 0);

    $options = [
        [[2, 7, 6], [9, 5, 1], [4, 3, 8]],
        [[6, 1, 8], [7, 5, 3], [2, 9, 4]],
        [[8, 3, 4], [1, 5, 9], [6, 7, 2]],
        [[4, 9, 2], [3, 5, 7], [8, 1, 6]],
        [[2, 9, 4], [7, 5, 3], [6, 1, 8]],
        [[4, 3, 8], [9, 5, 1], [2, 7, 6]],
        [[8, 1, 6], [3, 5, 7], [4, 9, 2]],
        [[6, 7, 2], [1, 5, 9], [8, 3, 4]],
    ];

    foreach ($s as $i => $row) {
        foreach ($row as $j => $value) {
            foreach ($costs as $k => $val) {
                $costs[$k] += abs($options[$k][$i][$j] - $value);
            }
        }
    }

    return min($costs);
}
?>
