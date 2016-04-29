<?php

namespace Cube\Html\Support;

use \Cube\Html\Factory\HtmlFactory;

class Assets extends Paths
{
	public function loadCss(array $files = null, string $dir = '')
	{
		if ($dir === '') {
			$dir = $this->getPath('css');
		}

		if ($files === null) {
			$files = $this->getFileList($dir, '.css');
		}

		$styles = [];
		foreach ($files as $file) {
			$styles[] = HtmlFactory::link('stylesheet', $file, 'text/css');
		}

		return $styles;
	}

	private function getFileList(string $path, string $extension = '')
	{
		$files = [];
		foreach(array_diff(scandir($path), array('.', '..')) as $file) {
			if (is_file($path . '/' . $file)) {
				if ($extension !== '' && pathinfo($path . '/' . $file, PATHINFO_EXTENSION) === $extension) {
					$files[] = $path . '/' . $file;
					break;
				} else {
					$files[] = $path . '/' . $file;
				}
			}
		}

    	return $files; 
	}
}