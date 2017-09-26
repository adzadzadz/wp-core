<?php

namespace arc\wp;

/**
* Core
*/
class Core
{
	public $appPath;

	function __construct()
	{	
		if (APP_PATH !== null) {
			$this->appPath = APP_PATH;
		}
	}
}