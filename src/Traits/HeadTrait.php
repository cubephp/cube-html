<?php

namespace Cube\Html\Traits;

use \Cube\Html\Element;

trait HeadTrait
{
	public function title(string $title, $attributes = [])
	{
		return new Element('title', $attributes, [$title]);
	}	

	public function style(string $style, $attributes = [])
	{
		return new Element('style', $attributes, [$style]);
	}

	public function base(string $href, string $target, $attributes = [])
	{
		return new Element('base', array_merge($attributes, ['href' => $href, 'target' => $target]));
	}

	public function link(string $rel, string $href, string $type = '', $attributes = [])
	{
		return new Element('link', array_merge($attributes, ['href' => $href, 'rel' => $rel, 'type' => $type]));
	}

	public function script(string $src, string $type = 'text/javascript', $attributes = [])
	{
		return new Element('script', array_merge($attributes, ['src' => $src, 'type' => $type]));
	}

	public function noScript($attributes = [])
	{
		return new Element('script', array_merge($attributes, ['src' => $src, 'type' => $type]));
	}

}