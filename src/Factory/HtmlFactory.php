<?php

namespace Cube\Html\Factory;

use \Cube\Html\Element;
use \Cube\Html\Element\{
	Text,
	Comment
};
use \Cube\Html\Traits\{
	InputTrait,
	MetaTrait,
	HeadTrait
};

class HtmlFactory
{
	use InputTrait, MetaTrait, HeadTrait;

	public function start($doctype = '<!DOCTYPE html>')
	{
		return $doctype . PHP_EOL . '<html>';
	}

	public function label($text, $attributes = [], $children = [])
	{
		return new Element('label', $attributes, array_merge($children, [self::paragraph($text)]));
	}

	public function end()
	{
		return PHP_EOL . '</html>';
	}

	public function br($attributes = [], $children = [])
	{
		return new Element('br', $attributes. $children);
	}

	public function hr($attributes = [], $children = [])
	{
		return new Element('hr', $attributes. $children);
	}

	public function paragraph(string $text = '', $attributes = [], $children = [])
	{
		if ($text !== '') {
			array_push($children, $text);
		}

		return new Element('p', $attributes, $children);
	}

	public function body($attributes = [], $children = [])
	{
		return new Element('body', $attributes, $children);
	}

	public function heading(int $size, string $text = '', $attributes = [], $children = [])
	{
		$size = 'h' . (string) $size;

		if ($text !== '') {
			array_push($children, $text);
		}

		return new Element($size, $attributes, $children);
	}

	public function span($attributes = [], $children = [])
	{
		return new Element('span', $attributes, $children);
	}

	public static function head($attributes = [], $children = [])
	{
		return new Element('head', $attributes, $children);
	}

	public static function form($attributes = [], $children = [])
	{
		return new Element('form', $attributes, $children);
	}

	public static function button($attributes = [], $children = [])
	{
		return new Element('button', $attributes, $children);
	}

	public static function input($attributes = [], $children = [])
	{
		return new Element('input', $attributes, $children);
	}

	public static function div($attributes = [], $children = [])
	{
		return new Element('div', $attributes, $children);
	}

	public static function comment($text)
	{
		return new Comment($text);
	}
}