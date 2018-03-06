<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Patterns\Strategy\BubbleSort;

final class SortTest extends TestCase
{
	protected static $unsortedArray,$sortedArray;

	public static function setUpBeforeClass()
	{
		self::$unsortedArray = [4,1,21,2,4,5,56,6,2634,26,23,43,14,14,12,1,16,61,16,7,46,734,74,46,234,5,54,14,541,134,5,23,5,2345,23,54,23,27,7,27,263,46,2345,2];
		self::$sortedArray = self::$unsortedArray;
		sort(self::$sortedArray, SORT_NUMERIC);
	}

    public function testBubbleSort(): void
    {
    	$array = self::$unsortedArray;
    	(new BubbleSort)->sort($array);
    	$this->assertEquals(self::$sortedArray,$array);
    }
}



