 
<?php if (!defined('_WDCMS')) die();
/*********************************************************************************
 *
 * CONFIDENTIAL
 * __________________
 *
 *  Copyright (C) WrightWay Digital, Ltd.
 *  All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of WrightWay Digital Ltd and its suppliers, if any.
 * The intellectual and technical concepts contained herein are proprietary
 * to WrightWay Digital Ltd and its suppliers and may be covered by UK and Foreign Patents,
 * or patents in process, and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from WrightWay Digital Ltd.
 *
 ********************************************************************************/

$table = $this->getTable('area', 'commerce', 'api');
$this->loadAsset('styles','toastr.css','vendor/toastr');
$this->loadAsset('styles','toastr.css','examples/css/advanced');
$this->loadAsset('script','toastr.js','vendor/toastr','foot');
$this->loadAsset('script','toastr.js','js/components','foot');
$this->loadAsset('script', 'area.js', 'js', 'foot');

$this->data = array();

if (isset($this->options['edit'])) {
	$edit = $this->options['edit'];

	$this->data['id'] = $edit;

	if ($edit != 0) {
		$this->data = $table->getOne($this->options['edit']);
	}

	$this->loadForm('area');
} else {
	echo $this->bootstrapAdminPanel($table, 'Area');
}
