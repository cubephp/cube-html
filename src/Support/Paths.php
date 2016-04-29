<?php

namespace Cube\Html\Support;

class Paths
{
	protected $basePath;
	protected $paths = [
		'app' => 'app/',
		'css' => 'app/assets/css/',
		'js' => 'app/assets/js',
		'common' => 'app/common/'
	];

	public function __construct(array $paths = [])
	{
		if (!empty($paths)) {
			$this->paths = $paths;
		}
	}

	public function get(string $path, string $file):string
	{
		return $this->basePath ?? '' . $this->paths[$path] . $file;
	}

	public function getPath(string $key)
	{
		return $this->paths[$key];
	}

	public function set(string $key, string $path)
	{
		$this->paths[$key] = $path;
		return $this;
	}

	public function getBasePath():string
	{
		return $this->basePath;
	}

	public function setBasePath(string $basePath)
	{
		$this->basePath = $basePath;
		return $this;
	}
}