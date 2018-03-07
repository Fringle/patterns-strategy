<?php

namespace Patterns\Strategy;

class ArrayShell
{
	private $sortMethod;

	public function __construct()
	{
		$this->sortMethod = new StandardSort;
	}

	public function sort(array &$array)
	{
		$this->sortMethod->sort($array);
	}

	public function setSortBehavior(SortBehavioralInterface $sortMethod)
	{
		$this->sortMethod = $sortMethod;
	}
}