<?php

namespace Cube\Html\Traits;

use \Cube\Html\Element;

trait InputTrait
{	
	public static function week($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'week']));	
	}

	public static function url($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'url']));	
	}

	public static function time($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'time']));	
	}

	public static function tel($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'tel']));	
	}

	public static function search($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'search']));	
	}

	public static function reset($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'reset']));	
	}

	public static function range($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'range']));	
	}

	public static function number($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'number']));	
	}

	public static function month($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'month']));	
	}

	public static function image($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'image']));	
	}

	public static function hidden($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'hidden']));	
	}

	public static function file($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'file']));	
	}

	public static function email($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'email']));	
	}

	public static function inputButton($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'button']));	
	}

	public static function color($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'color']));	
	}

	public static function date($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'date']));	
	}

	public static function datetime($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'datetime']));	
	}

	public static function datetimeLocal($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'datetime-local']));	
	}

	public static function text($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'text']));	
	}

	public static function password($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'password']));
	}

	public static function submit($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'submit']));
	}

	public static function radio($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'radio']));
	}

	public static function checkbox($attributes = [])
	{
		return new Element('input', array_merge($attributes, ['type' => 'checkbox']));
	}
}