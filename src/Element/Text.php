<?php

namespace Cube\Html\Element;

use \Cube\Html\ElementInterface;

class Text implements ElementInterface
{
	protected $value;

	public function __construct($text)
	{
		$this->set($text);
	}

	public function __toString()
	{
		return $this->value;
	}

	public function get():string
	{
		return $this->value;
	}

	public function set(string $value)
	{
		$this->value = $value;
	}
}