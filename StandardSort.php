<?php

namespace Patterns\Strategy;

class StandardSort implements SortBehavioralInterface
{
	public function sort(array &$array) : void
	{
		sort($array);
	}
}