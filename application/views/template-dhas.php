<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Starter-Codeigniter - <?php echo isset($title) ? $title : 'Dashboard'; ?></title>

		<!-- BEGIN META -->
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
		<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/style.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/backend/js/libs/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" />
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
		<script src="<?php echo base_url();?>assets/backend/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url();?>assets/backend/js/libs/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>	
  		<script src="<?php echo base_url(); ?>assets/backend/js/libs/ckeditor/ckeditor.js"></script>
		<script src="<?php echo base_url(); ?>assets/backend/js/libs/ckeditor/adapters/jquery.js"></script>
		<!-- datetime -->
		 <script src="<?php echo base_url();?>assets/backend/js/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
		 <script src="<?php echo base_url();?>assets/backend/js/jquery.datetimepicker.full.js"></script>
		 <script src="<?php echo base_url();?>assets/backend/js/jquery.js"></script>
		 <script src="<?php echo base_url();?>assets/backend/js/libs/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
		<?php echo isset($scripts) ? $scripts :'' ?>
		
		<!-- <script src="<?php echo base_url() ?>assets/backend/js/core/demo/DemoDashboard.js"></script> -->
		
		<script type="text/javascript">
			var url = '<?php echo base_url(); ?>';
		</script>
	</head>
	<body class="menubar-hoverable header-fixed ">
		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="<?php echo base_url() ?>dashboard">
									<span class="text-lg text-bold text-primary">Dhasboard</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-options">
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
							</a>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header">Today's messages</li>
								<li>
									<a class="alert alert-callout alert-warning" href="javascript:void(0);">
										<img class="pull-right img-circle dropdown-avatar" src="<?php echo base_url() ?>assets/backend/img/avatar2.jpg?1404026449" alt="" />
										<strong>Alex Anistor</strong><br/>
										<small>Testing functionality...</small>
									</a>
								</li>
								<li>
									<a class="alert alert-callout alert-info" href="javascript:void(0);">
										<img class="pull-right img-circle dropdown-avatar" src="<?php echo base_url() ?>assets/backend/img/avatar3.jpg?1404026799" alt="" />
										<strong>Alicia Adell</strong><br/>
										<small>Reviewing last changes...</small>
									</a>
								</li>
								<li class="dropdown-header">Options</li>
								<li><a href="<?php echo base_url() ?>html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
								<li><a href="<?php echo base_url() ?>html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-options -->
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="<?php echo base_url() ?>assets/backend/img/avatar1.jpg?1403934956" alt="" />
								<span class="profile-info">
									<!-- <?php echo $this->session->userdata('back_name'); ?> -->
									<small>Administrator</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li class="dropdown-header">Config</li>
								<li><a href="<?php echo base_url() ?>html/pages/profile.html">My profile</a></li>
								<li><a href="<?php echo base_url() ?>html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
								<li><a href="<?php echo base_url() ?>html/pages/calendar.html">My appointments</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo base_url() ?>html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
								<li><a href="<?php echo base_url().'auth/logout' ?>"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN CONTENT-->
			<?php echo $contents ?>
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="<?php echo base_url() ?>dashboard">
							<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">
					
						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="<?php echo base_url() ?>dashboard" >
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-email"></i></div>
								<span class="title">Article</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="" ><span class="title">Blog</span></a></li>
							</ul><!--end /submenu -->
						</li>

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->
					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

		</div><!--end #base-->
		<!-- END BASE -->

		<!-- BEGIN JAVASCRIPT -->
		
		<!-- END JAVASCRIPT -->
		
	</body>
</html>
