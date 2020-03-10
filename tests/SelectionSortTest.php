<?php declare(strict_types=1);

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class SelectionSortTest extends TestCase
{
    function testSelectionSort()
    {
        $expected = [1, 2, 3, 4, 5];
        $actual = selectionSort([5, 4, 3, 2, 1]);

        $this->assertEquals($expected, $actual);
    }
}
