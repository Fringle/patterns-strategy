<?php

namespace Patterns\Strategy;

interface SortBehavioralInterface
{
	/**
	*	@param array $array
	*
	*	@return void
	*/
	public function sort(array &$array): void;
}