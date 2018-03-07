<?php

namespace Patterns\Strategy;

class ArrayBox
{
	private $sortMethod;
	public $array = [];

	public function __construct(array $array)
	{
		$this->array = $array;
		$this->sortMethod = new StandardSort;
	}

	public function sort()
	{
		$this->sortMethod->sort($this->array);
	}

	public function setSortBehavior(SortBehavioralInterface $sortMethod)
	{
		$this->sortMethod = $sortMethod;
	}
}