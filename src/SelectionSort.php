<?php declare(strict_types=1);

function selectionSort($items) {
    for ($i = 0; $i < count($items) - 1; $i++) {
        $min = $i;

        for ($j = $i + 1; $j < count($items); $j++) {
            if ($items[$min] > $items[$j]) {
                $min = $j;
            }
        }

        $temp = $items[$min];
        $items[$min] = $items[$i];
        $items[$i] = $temp;
    }

    return $items;
}
