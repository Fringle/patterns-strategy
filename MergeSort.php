<?php
;
;;
;;;
;;;;
;;;;;
declare(strict_types=1);

namespace Patterns\Strategy;

class MergeSort implements SortBehavioralInterface
{
	public function sort(array &$array) : void
	{
		$array = $this->mergeSort($array);;
	}

	private function mergeSort($array): array
	{
	    $count = count($array);
	    if ($count <= 1) {
	        return $array;
	    }

        $size = (int)ceil($count / 2);
        return $this->mergeSortedArrays(
            $this->mergeSort(array_slice($array, 0, $size)),
            $this->mergeSort(array_slice($array, $size)));
	}

	private function mergeSortedArrays(array $first, array $second): array
	{
	    $array = [];
	    $i = $j = 0;
	    $countFirst = count($first) - 1;
	    $countSecond = count($second) - 1;

	    while (($i <= $countFirst) && ($j <= $countSecond)){
	        $array[] = $first[$i] <= $second[$j] ? $first[$i++] : $second[$j++];
	    }

	    if ($i <= $countFirst) {
	        $array = array_merge($array, array_slice($first, $i));
	    } elseif ($j <= $countSecond) {
	        $array = array_merge($array, array_slice($second, $j));
	    }

	    return $array;
	}

}
