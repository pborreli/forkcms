<?php

// require the Model-class
require_once BACKEND_MODULE_PATH .'/engine/model.php';

/**
 * UsersConfig
 *
 * This is the configuration-object for the users module
 *
 * @package		backend
 * @subpackage	users
 *
 * @author 		Tijs Verkoyen <tijs@netlash.com>
 * @since		2.0
 */
final class UsersConfig extends BackendBaseConfig
{
	/**
	 * The default action
	 *
	 * @var	string
	 */
	protected $defaultAction = 'index';


	/**
	 * The disabled actions
	 *
	 * @var	array
	 */
	protected $disabledActions = array();


	/**
	 * The disabled AJAX-actions
	 *
	 * @var	array
	 */
	protected $disabledAJAXActions = array();


	/**
	 * The linked actions
	 *
	 * @var	array
	 */
	protected $linkedAjaxActions = array();
}

?>