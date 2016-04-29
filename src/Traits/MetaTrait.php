<?php

namespace Cube\Html\Traits;

use \Cube\Html\Element;

trait MetaTrait
{
	public static function charset(string $charset = 'UTF-8', $attributes = [])
	{
		return new Element('meta', array_merge($attributes, ['charset' => $charset]));
	}

	public static function keywords(string $keywords = '', $attributes = [])
	{
		return new Element('meta', array_merge($attributes, [
			'name' => 'keywords', 
			'content' => $keywords
		]));
	}

	public static function description(string $description = '', $attributes = [])
	{
		return new Element('meta', array_merge($attributes, [
			'name' => 'description', 
			'content' => $description
		]));
	}

	public static function subject(string $subject = '', $attributes = [])
	{
		return new Element('meta', array_merge($attributes, [
			'name' => 'subject', 
			'content' => $subject
		]));
	}

	public static function copyright(string $copyright = '', $attributes = [])
	{
		return new Element('meta', array_merge($attributes, [
			'name' => 'copyright', 
			'content' => $copyright
		]));
	}
}