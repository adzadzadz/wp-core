<?php 

namespace arc\wp;

/**
* Core View
*/
class View extends Core
{
	public $viewPath = 'views';

	public function render($filename)
	{
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		$path = explode('/', $filename);
		include APP_PATH . "/$this->viewPath/$filename.php";
	}
}