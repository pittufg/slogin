<?php
/**
 * SLogin
 *
 * @version 	2.9.1
 * @author		SmokerMan, Arkadiy, Joomline
 * @copyright	© 2012-2020. All rights reserved.
 * @license 	GNU/GPL v.3 or later.
 */

defined('_JEXEC') or die( 'Restricted access' );
jimport('joomla.application.component.model');

class SloginTableSlogin_users extends JTable
{
    function __construct( &$_db )
    {
        parent::__construct('#__slogin_users', 'id', $_db );
    }
}
?>