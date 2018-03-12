<?php
declare(strict_types=1);

namespace Patterns\Strategy;

class QuickSortRecursive implements SortBehavioralInterface
{
    public function sort(array &$array): void
    {
        $this->quickSort($array, 0, count($array) - 1);
    }

    public function quickSort(array &$array, int $left, int $right): void
    {
        if ($left < $right) {
            $pivotIndex = $this->partition($array, $left, $right);
            $this->quickSort($array, $left, $pivotIndex - 1);
            $this->quickSort($array, $pivotIndex, $right);
        }
    }

    public function partition(array &$array, int $left, int $right): int
    {
        $pivot = $array[(int)(($right + $left) / 2)];
        $i = $left;
        $j = $right;
        while ($i <= $j) {
            while ($array[$i] < $pivot)
                $i++;
            while ($array[$j] > $pivot)
                $j--;
            if ($i <= $j) {
                list($array[$i], $array[$j]) = [$array[$j], $array[$i]];
                $i++;
                $j--;
            }
        }
        return $i;
    }
}