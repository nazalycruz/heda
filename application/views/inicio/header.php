<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
?>
	<meta charset="utf-8" />
	<title>HEDA <?= (empty($this->db->servidor) ? '' : ' - '. $this->db->servidor); ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<link rel="shortcut icon" href="<?=base_url();?>assets/img/pje.ico" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="<?=auto_version('assets/plugins/font-Roboto/css/Roboto.css');?>" rel="stylesheet"/>
	<link href="<?=auto_version('assets/plugins/material-icons/css/material-icons.css');?>" rel="stylesheet"/> <!-- Eliminar en la próxima versión -->
	<link href="<?=auto_version('assets/css/vendor.min.css');?>" rel="stylesheet" />

	<link href="<?=auto_version('assets/css/app.min.css');?>" rel="stylesheet" />

	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== DATA TABLE ================== -->
	<link href="<?=auto_version('assets/plugins/DataTables/datatables.min.css');?>" rel="stylesheet" />
	<link href="<?=auto_version('assets/plugins/DataTables/dataTables.checkboxes.css');?>" rel="stylesheet" />
	<link href="<?=auto_version('assets/plugins/DataTables/awesome-bootstrap-checkbox.css');?>" rel="stylesheet" />

	<!-- ================== DATEPICKER ================== -->
	<link href="<?=auto_version('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css');?>" rel="stylesheet" />

	<!-- ================== SELECT2 ================== -->
   	<link href="<?=auto_version('assets/plugins/select2/css/select2.min.css');?>" rel="stylesheet">
		<link href="<?=auto_version('assets/plugins/select2/css/select2-bootstrap-5-theme.min.css');?>" rel="stylesheet"/>

	<!-- ================== iziToast ================== -->
	<link href="<?=auto_version('assets/plugins/iziToast/iziToast.min.css');?>" rel="stylesheet" />

	<!-- ================== FANCY TREE ================== -->
	<link href="<?=auto_version('assets/plugins/fancytree/skin-win8/ui.fancytree.css');?>" rel="stylesheet">

	<!-- ================== dependent-dropdown ================== -->
	<link href="<?=auto_version('assets/plugins/dependent-dropdown/css/dependent-dropdown.min.css');?>" rel="stylesheet" />

	<!-- ================== fullcalendar ================== -->
	<link href="<?=auto_version('assets/plugins/SmartWizard/css/smart_wizard_all.min.css');?>" rel="stylesheet" />

	<!-- ================== fullcalendar ================== -->
	<link href="<?=auto_version('assets/plugins/jstree/themes/default/style.min.css');?>" rel="stylesheet" />

	<link href="<?=auto_version('assets/css/estilosPJE.css');?>" rel="stylesheet" />
</head>
<body>
