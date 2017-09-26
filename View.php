<?php 

namespace arc\wp;

/**
* Core View
*/
class View extends Core
{
	/**
	 * View path
	 * @var string
	 */
	public $viewPath = 'views';

	/**
	 * Responsible for rendering the wp admin pages
	 * @param  string $filename the view name to be rendered
	 */
	public function renderAdmin($view)
	{
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		echo "<div style='margin-top: 30px'></div>";
		include APP_PATH . "/$this->viewPath/admin/$view.php";
	}
}