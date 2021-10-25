<?php
/**
 *
 * Description
 *
 * @package	VirtueMart
 * @subpackage Shipment
 * @author RickG
 * @link https://virtuemart.net
 * @copyright Copyright (c) 2004 - Copyright (C) 2004 - 2021 Virtuemart Team. All rights reserved. VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: edit.php 10396 2021-01-11 11:35:30Z alatak $
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
$adminTemplate = VMPATH_ROOT . '/administrator/templates/vmadmin/html/com_virtuemart/';
JLoader::register('vmuikitAdminUIHelper', $adminTemplate . 'helpers/vmuikit_adminuihelper.php');
vmuikitAdminUIHelper::startAdminArea($this);
?>
<form action="index.php" method="post" name="adminForm" id="adminForm" class="uk-form-horizontal">

	<?php // Loading Templates in Tabs
	$tabarray = array();
	$tabarray['edit'] = 'COM_VIRTUEMART_ADMIN_SHIPMENT_FORM';
	$tabarray['config'] = 'COM_VIRTUEMART_ADMIN_SHIPMENT_CONFIGURATION';

	vmuikitAdminUIHelper::buildTabs ( $this, $tabarray , $this->shipment->virtuemart_shipmentmethod_id );
	// Loading Templates in Tabs END ?>

	<!-- Hidden Fields -->
	<?php echo $this->addStandardHiddenToForm(); ?>
	<input type="hidden" name="virtuemart_shipmentmethod_id" value="<?php echo $this->shipment->virtuemart_shipmentmethod_id; ?>" />
	<input type="hidden" name="xxcontroller" value="shipmentmethod" />


<?php vmuikitAdminUIHelper::endAdminArea(); ?>