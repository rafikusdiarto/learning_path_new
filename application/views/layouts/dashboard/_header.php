<!DOCTYPE html>
<html>

<head>

	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$judul?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<!-- Required CSS -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/css/select2.min.css"> -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css"> -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/skin-blue.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/skin-yellow.min.css"> -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/pace/pace-theme-flash.css"> -->
	
	<!-- Datatables Buttons -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css"> -->

	<!-- textarea editor -->
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/codemirror/lib/codemirror.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/froala_style.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/themes/royal.min.css">
	<!-- /texarea editor; -->

	<!-- Custom CSS -->
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/mystyle.css"> -->
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/sb-admin-2.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/vendor/fontawesome-free/css/all.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<!-- include summernote css/js -->
    <script src="<?=base_url()?>assets/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"/>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    
</head>

<!-- Must Load First -->
<script src="<?=base_url()?>assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/select2/js/select2.full.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>	
<script src="<?=base_url()?>assets/dist/vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/dist/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url()?>assets/dist/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?=base_url()?>assets/dist/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?=base_url()?>assets/dist/js/demo/chart-area-demo.js"></script>
<script src="<?=base_url()?>assets/dist/js/demo/chart-pie-demo.js"></script>


<script type="text/javascript">
	let base_url = '<?=base_url()?>';
</script>

<body id="page-top">
	<div id="wrapper">		
		<?php require_once("_sidebar.php"); ?>
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?php require_once("_topmenu.php"); ?>
				<div class="container-fluid">
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">
						<?=$judul?>
						<small><?=$subjudul?></small>
						</h1>
                        <ol class="breadcrumb">
							<li><a href="<?=base_url('dashboard')?>"></i> Dashboard ></a></li>
							<li class="active"><?=$judul;?> ></li>
							<li class="active"><?=$subjudul?> ></li>
						</ol>
					</div>
	
				
			
				
			



