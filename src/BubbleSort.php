<?php declare(strict_types=1);

function bubbleSort($items) {
    for ($i = 0; $i < count($items) - 1; $i++) {
        for ($j = 0; $j < count($items) - 1 - $i; $j++) {
            if ($items[$j] > $items[$j + 1]) {
                $temp = $items[$j];
                $items[$j] = $items[$j + 1];
                $items[$j + 1] = $temp;
            }
        }
    }

    return $items;
}
