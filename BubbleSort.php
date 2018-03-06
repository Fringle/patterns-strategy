<?php
declare(strict_types=1);

namespace Patterns\Strategy;

class BubbleSort implements SortBehavioralInterface
{
	public function sort(array &$array) : void
	{
		$size = count($array);
		for($i = 0; $i < $size; $i++){

			$transposition = false;

			for($j = 0; $j < $size - $i - 1; $j++){

				if($array[$j] > $array[$j + 1]){

					$tmp = $array[$j];
					$array[$j] = $array[$j + 1];
					$array[$j + 1] = $tmp;
					$transposition = true;
				}
			}

			if(!$transposition){
				break;
			}

		}
	}
}