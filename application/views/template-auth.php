<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/material-design-iconic-font.min.css?1421434286" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/libs/rickshaw/rickshaw.css?1422792967" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/libs/morris/morris.core.css?1420463396" />
		<?php echo isset($styles) ? $styles : '' ?>
		
		<script src="<?php echo base_url() ?>assets/backend/js/libs/jquery/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/bootstrap/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/spin.js/spin.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/autosize/jquery.autosize.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/moment/moment.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/flot/jquery.flot.time.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/flot/jquery.flot.resize.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/flot/jquery.flot.orderBars.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/flot/curvedLines.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/jquery-knob/jquery.knob.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/sparkline/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/d3/d3.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/d3/d3.v3.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/libs/rickshaw/rickshaw.min.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/core/source/App.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/core/source/AppNavigation.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/core/source/AppOffcanvas.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/core/source/AppCard.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/core/source/AppForm.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/core/source/AppNavSearch.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/core/source/AppVendor.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/core/demo/Demo.js"></script>
		<script src="<?php echo base_url() ?>assets/backend/js/bootbox.min.js"></script>
		<!-- <script src="<?php echo base_url() ?>assets/backend/js/core/demo/DemoDashboard.js"></script> -->
		<?php echo isset($scripts) ? $scripts : '' ?>
		<script type="text/javascript">
			var url = '<?php echo base_url(); ?>';
		</script>

	</head>
	<body class="menubar-hoverable header-fixed ">
		<?php echo $contents; ?>
	</body>
</html>
