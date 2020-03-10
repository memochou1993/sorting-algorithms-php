<?php declare(strict_types=1);

function insertionSort($items) {
    for ($i = 1; $i < count($items); $i++) {
        $temp = $items[$i];

        for ($j = $i - 1; $j >= 0 && $temp < $items[$j]; $j--) {
            $items[$j + 1] = $items[$j];
        }

        $items[$j + 1] = $temp;
    }

    return $items;
}
