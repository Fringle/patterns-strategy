<?php
declare(strict_types=1);

namespace Patterns\Strategy;

class QuickSortRecursiveCopying implements SortBehavioralInterface
{
    public function sort(array &$array): void
    {
        $array = $this->quickSort($array);
    }

    public function quickSort($array)
    {
        $length = count($array);

        if ($length <= 1) {
            return $array;
        } else {

            $pivot = $array[0];

            $left = $right = array();

            for ($i = 1; $i < count($array); $i++) {
                if ($array[$i] < $pivot) {
                    $left[] = $array[$i];
                } else {
                    $right[] = $array[$i];
                }
            }

            return array_merge($this->quickSort($left), array($pivot), $this->quickSort($right));
        }
    }
}