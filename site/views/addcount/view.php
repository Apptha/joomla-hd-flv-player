<?php
/**
 * @name 	        hdflvplayer
 ** @version	        2.3
 * @package	        Apptha
 * @since	        Joomla 1.5
 * @subpackage	        hdflvplayer
 * @author      	Apptha - http://www.apptha.com/
 * @copyright 		Copyright (C) 2011 Powered by Apptha
 * @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @abstract      	com_hdflvplayer installation file.
 ** @Creation Date	23 Feb 2011
 ** @modified Date	26 Nov 2014
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

//Imports for joomla libraries 
jimport( 'joomla.application.component.view');

/*
 * HDFLV player view class for Add count for videos
 */
class hdflvplayerViewaddcount extends HdflvplayerView
{

	function getaddview()
	{
        $model =$this->getModel();
		$detail = $model->getviewcount();
       
	}

}
?>   