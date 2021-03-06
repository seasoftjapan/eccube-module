<?php
/**
 * This file is part of EC-CUBE coincheck module
 *
 * @copyright 2014 coincheck All Rights Reserved.
 */
require_once('../require.php');
require_once(MODULE_REALDIR . 'mdl_coincheck/inc/include.php');
require_once(MDL_COINCHECK_CLASS_REALDIR . "pages/LC_Page_Mdl_Coincheck_Recv.php");

// generate page

$objPage = new LC_Page_Mdl_Coincheck_Recv();
register_shutdown_function(array($objPage, "destroy"));
$objPage->init();
$objPage->process();
