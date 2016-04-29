<?php

namespace Cube\Html;

use \Cube\Html\Element\Text;

class Element implements ElementInterface
{
	protected $name;
	protected $attributes;
	protected $children;
	protected $noEndTag = [
		'input',
		'area',
		'br',
		'col',
		'command',
		'embed',
		'hr',
		'img',
		'link',
		'meta',
		'param',
		'source'
	];

	public function __construct(
		$name, 
		$attributes = null,
		$children = []
	){
		$this->setName($name)
			->setAttributes($attributes)
			->setChildren($children);
	}

	public function __toString()
	{
		$content = !empty($this->children) ? $this->childrenToString() : '';

		if (in_array($this->name, $this->noEndTag)) {
			return PHP_EOL . '<' . $this->name . $this->attributes . '>' . $content;
		}

		return PHP_EOL . '<' . $this->name . $this->attributes . '>' . $content . '</' . $this->name . '>';
	}

	public function childrenToString()
	{
		$i = 0;
		$numItems = count($this->children);
		$str = '';
		foreach ($this->children as $child) {
			if (++$i === $numItems && $numItems > 1){
				$str = $str . $child . PHP_EOL;
			} else {
				$str = $str . $child;
			}
		}

		return $str;
	}

	public function setChildren(array $children)
	{
		foreach ($children as $child) {
			if(is_string($child)) {
				$child = new Text($child);
			}

			if ($child instanceOf ElementInterface) {
				$this->add($child);
			}
		}

		return $this;
	}

	public function add(ElementInterface $child)
	{
		$this->children[] = $child;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName(string $name)
	{
		$this->name = $name;
		return $this;
	}

	public function getAttributes():array
	{
		return $this->attributes;
	}

	public function setAttributes($attributes)
	{
		if (is_null($attributes)) {
			$attributes = new Attributes([]);
		}

		if (is_array($attributes)) {
			$attributes = new Attributes($attributes);
		}

		if (!$attributes instanceOf Attributes) {
			throw new \InvalidArgumentException('attributes must be array or instance of Attributes');
		}

		$this->attributes = $attributes;

		return $this;
	}
}