<?php 

namespace arc\wp;

/**
* Core Controller
*/
class Controller
{
	public $view;

	function __construct()
	{
		$this->view = new View;
	}
}