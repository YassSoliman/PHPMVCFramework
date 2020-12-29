<?php

namespace app\core;

class Request
{
	public function getPath()
	{
		$requestURIExploded = explode('/', $_SERVER["REQUEST_URI"]);
		$requestURIFormatted = '/' . $requestURIExploded[1];
		$path = str_replace($requestURIFormatted, "", $_SERVER['REQUEST_URI']) ?? '/';
		$position = strpos($path, '?');
		if ($position === false) {
			return $path;
		}
		$path = substr($path, 0, $position);
	}

	public function getMethod()
	{
		return strtolower($_SERVER['REQUEST_METHOD']);

	}
}

?>
