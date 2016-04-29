<?php

namespace Cube\Html;

class Attributes
{
	protected $attributes;

	public function __construct(array $attributes = [])
	{
		$this->setAll($attributes);
	}

	public function __toString()
	{
		if (empty($this->attributes)) {
			return '';
		}

		$str = '';
		foreach ($this->attributes as $attribute) {
			$str .= ' ' . $attribute;
		}

		return $str;
	}

	public function get(string $key)
	{
		return $this->attributes[$key];
	}

	public function set($attribute, string $value = null)
	{
		if ($attribute instanceOf Attribute) {
			$this->attributes[$attribute->getName()] = $attribute;
		} else {
			$this->attributes[$attribute] = new Attribute($attribute, $value);
		}

		return $this;
	}

	public function getAll():array
	{
		return $this->attributes;
	}

	public function setAll(array $attributes)
	{
		$this->attributes = self::normalizeAttributes($attributes);
	}

	public static function normalizeAttributes(array $attributes)
	{
		$sorted = [];
		foreach ($attributes as $key => $value) {
			if ($value instanceOf Attribute) {
				$sorted[$value->getName()] = $value;
			} elseif (is_string($key) && is_string($value)) {
				$sorted[$key] = new Attribute($key, $value);
			} else {
				continue;
			}
		}

		return $sorted;
	}
}