<?php declare(strict_types=1);

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class InsertionSortTest extends TestCase
{
    function testInsertionSort()
    {
        $expected = [1, 2, 3, 4, 5];
        $actual = insertionSort([5, 4, 3, 2, 1]);

        $this->assertEquals($expected, $actual);
    }
}
