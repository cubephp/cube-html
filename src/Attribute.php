<?php

namespace Cube\Html;

class Attribute
{
	protected $name;
	protected $value;

	public function __construct(string $name, string $value)
	{
		$this->name = $name;
		$this->value = $value;
	}

	public function __toString()
	{
		return $this->name . '="' . $this->value . '"';
	}

	public function getName():string
	{
		return $this->name;
	}

	public function setName(string $name)
	{
		$this->name = $name;
		return $this;
	}

	public function getValue():string
	{
		return $this->value;
	}

	public function setValue(string $value)
	{
		$this->value = $value;
		return $this;
	}
}