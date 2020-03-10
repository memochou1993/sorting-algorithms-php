<?php declare(strict_types=1);

function mergeSort($items) {
    if (count($items) <= 1) {
        return $items;
    }

    $half = (int) floor(count($items) / 2);
    $left = mergeSort(array_slice($items, 0, $half));
    $right = mergeSort(array_slice($items, $half));

    while (count($left) && count($right)) {
        if ($left[0] < $right[0]) {
            $reg[] = array_shift($left);
        } else {
            $reg[] = array_shift($right);
        }
    }

    return array_merge($reg, $left, $right);
}
