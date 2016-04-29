<?php

namespace Cube\Html\Element;

use \Cube\Html\Element;

class Comment extends Element
{
	public function __construct(string $text = '')
	{
		$this->add(new Text($text));
	}

	public function __toString()
	{
		return '<!--' . $this->childrenToString() . '-->';
	}
}