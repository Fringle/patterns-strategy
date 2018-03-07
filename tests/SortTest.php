<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Patterns\Strategy\BubbleSort;
use Patterns\Strategy\ArrayBox;

final class SortTest extends TestCase
{
	protected static $unsortedArray,$sortedArray;

	public static function setUpBeforeClass()
	{
		self::$unsortedArray = [4,1,21,2,4,5,56,6,2634,26,23,43,14,14,12,1,16,61,16,7,46,734,74,46,234,5,54,14,541,134,5,23,5,2345,23,54,23,27,7,27,263,46,2345,2];
		self::$sortedArray = self::$unsortedArray;
		sort(self::$sortedArray, SORT_NUMERIC);
	}

    public function testStandardSort(): void
    {
        $arrayBox = new ArrayBox(self::$unsortedArray);
        $arrayBox->sort();
        $this->assertequals(self::$sortedArray, $arrayBox->array);
    }

    public function testBubbleSort(): void
    {
        $arrayBox = new ArrayBox(self::$unsortedArray);
        $arrayBox->setSortBehavior(new BubbleSort);
        $arrayBox->sort();
    	$this->assertEquals(self::$sortedArray,$arrayBox->array);
    }
}