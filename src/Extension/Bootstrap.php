<?php

namespace Cube\Html\Extension;

use \Cube\Html\Factory\HtmlFactory;

class Bootstrap
{
	protected $inputs = [
		'text',
		'password', 
		'datetime',
		'datetime-local',
		'date',
		'month',
		'time',
		'week',
		'number',
		'email', 
		'url',
		'search',
		'tel',
		'color'
	];

	public function button($text = '', $type = 'default', $size = '', bool $block = false, $attributes = [], $children = [])
	{
		if ($size !== '') {
			$size = ' btn-' . $size;
		}

		if ($block === true) {
			$block = ' btn-block';
		} else {
			$block = '';
		}

		return HtmlFactory::button(array_merge([
			'class' => 'btn btn-' . $type . $size . $block,
		], $attributes), array_merge([$text], $children));
	}

	public function input($type = 'text', $attributes = [])
	{
		if (in_array($type, $this->inputs)) {
			$attributes = array_merge($attributes, ['class' => 'form-control']);
		}

		return HtmlFactory::input(array_merge($attributes, ['type' => $type]));
	}

	public function formGroup($attributes, $children)
	{
		return HtmlFactory::div(array_merge($attributes, ['class' => 'form-group']), $children);
	}
}