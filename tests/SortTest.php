<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Patterns\Strategy\BubbleSort;
use Patterns\Strategy\ArrayShell;
use Patterns\Strategy\MergeSort;
use Patterns\Strategy\QuickSortRecursive;
use Patterns\Strategy\QuickSortRecursiveCopying;

class SortTest extends TestCase
{
    public $arrayShell;

    public function setUp()
    {
        $this->arrayShell = new ArrayShell();
    }

    /**
     * @dataProvider providerArrays
     */

    public function testStandardSort($unsorted, $sorted)
    {
        $this->arrayShell->sort($unsorted);
        $this->assertEquals($sorted, $unsorted);
    }

    /**
     * @dataProvider providerArrays
     */

    public function testBubbleSort($unsorted, $sorted)
    {
        $this->arrayShell->setSortBehavior(new BubbleSort);
        $this->arrayShell->sort($unsorted);
        $this->assertEquals($sorted, $unsorted);
    }

    /**
     * @dataProvider providerArrays
     */

    public function testMergeSort($unsorted, $sorted)
    {
        $this->arrayShell->setSortBehavior(new MergeSort);
        $this->arrayShell->sort($unsorted);
        $this->assertEquals($sorted, $unsorted);
    }

    /**
     * @dataProvider providerArrays
     */

    public function testQuickSortRecursive($unsorted, $sorted)
    {
        $this->arrayShell->setSortBehavior(new QuickSortRecursive);
        $this->arrayShell->sort($unsorted);
        $this->assertEquals($sorted, $unsorted);
    }

    /**
     * @dataProvider providerArrays
     */

    public function testQuickSortRecursiveCopying($unsorted, $sorted)
    {
        $this->arrayShell->setSortBehavior(new QuickSortRecursiveCopying);
        $this->arrayShell->sort($unsorted);
        $this->assertEquals($sorted, $unsorted);
    }

    public function providerArrays(): array
    {
        return [
            array(
                'unsorted' => [4, 1, 21, 2, 4, 5, 56, 6, 2634, 26, 23, 43, 14, 14, 12, 1, 16, 61, 16, 7, 46, 734, 74, 46, 234, 5, 54, 14, 541, 134, 5, 23, 5, 2345, 23, 54, 23, 27, 7, 27, 263, 46, 2345, 2],
                'sorted' => [1, 1, 2, 2, 4, 4, 5, 5, 5, 5, 6, 7, 7, 12, 14, 14, 14, 16, 16, 21, 23, 23, 23, 23, 26, 27, 27, 43, 46, 46, 46, 54, 54, 56, 61, 74, 134, 234, 263, 541, 734, 2345, 2345, 2634,]),
            array(
                'unsorted' => [2, 14, 14, 15, 51, 25, 5, 53, 436, 65, 6235, 7, 3, 37, 45, 65, 134, 5, 325, 234, 231, 6, 6, 71, 7, 7, 45, 5, 347, 54, 634, 7, 856, 678, 4788, 456756],
                'sorted' => [2, 3, 5, 5, 5, 6, 6, 7, 7, 7, 7, 14, 14, 15, 25, 37, 45, 45, 51, 53, 54, 65, 65, 71, 134, 231, 234, 325, 347, 436, 634, 678, 856, 4788, 6235, 456756,]
            )
        ];
    }
}