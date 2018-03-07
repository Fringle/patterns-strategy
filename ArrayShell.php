<?php

namespace Patterns\Strategy;

class ArrayShell
{
	private $sortMethod;
	// public $array = [];

	public function __construct()
	{
		// $this->array = $array;
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