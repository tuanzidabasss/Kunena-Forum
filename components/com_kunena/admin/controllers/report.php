<?php
/**
 * Kunena Component
 *
 * @package       Kunena.Administrator
 * @subpackage    Controllers
 *
 * @copyright (C) 2008 - 2015 Kunena Team. All rights reserved.
 * @license       http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link          http://www.kunena.org
 **/
defined('_JEXEC') or die ();

/**
 * Kunena Report Controller
 *
 * @since 2.0
 */
class KunenaAdminControllerReport extends KunenaController
{
	protected $baseurl = null;

	/**
	 * @param array $config
	 */
	public function __construct($config = array())
	{
		parent::__construct($config);
		$this->baseurl = 'administrator/index.php?option=com_kunena&view=report';
	}

	/**
	 *
	 */
	function systemreport()
	{
		$this->setRedirect(KunenaRoute::_($this->baseurl, false));
	}

}
