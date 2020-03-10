<?php declare(strict_types=1);

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class MergeSortTest extends TestCase
{
    function testMergeSort()
    {
        $expected = [1, 2, 3, 4, 5];
        $actual = mergeSort([5, 4, 3, 2, 1]);

        $this->assertEquals($expected, $actual);
    }
}
