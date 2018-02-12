<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<?php
       $this->load->view('components/link');
	?>
	<style type="text/css">

	</style>
</head>
	<body class="hold-transition skin-blue sidebar-mini">
		  <!-- Content Wrapper. Contains page content -->
			  	<?php
		       		$this->load->view('components/header');
				?>
				<?php
		       		$this->load->view('components/sidebar');
				?>
			  <div class="content-wrapper">
			    <!-- Content Header (Page header) -->
				    <section class="content-header">
				      <h1>
				        Dashboard
				      </h1>
				      <ol class="breadcrumb">
				        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				        <li class="active">Dashboard</li>
				      </ol>
				   

				    <!-- Main content -->
				    <section class="content">
							<div class="row">
								
						        <div class="col-md-3 col-sm-6 col-xs-12">
						          <div class="info-box">
						            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

						            <div class="info-box-content">
						              <span class="info-box-text">CPU Traffic</span>
						              <span class="info-box-number">90<small>%</small></span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-md-3 col-sm-6 col-xs-12">
						          <div class="info-box">
						            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

						            <div class="info-box-content">
						              <span class="info-box-text">Likes</span>
						              <span class="info-box-number">41,410</span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->

						        <!-- fix for small devices only -->
						        <div class="clearfix visible-sm-block"></div>

						        <div class="col-md-3 col-sm-6 col-xs-12">
						          <div class="info-box">
						            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

						            <div class="info-box-content">
						              <span class="info-box-text">Sales</span>
						              <span class="info-box-number">760</span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						        <div class="col-md-3 col-sm-6 col-xs-12">
						          <div class="info-box">
						            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

						            <div class="info-box-content">
						              <span class="info-box-text">New Members</span>
						              <span class="info-box-number">2,000</span>
						            </div>
						            <!-- /.info-box-content -->
						          </div>
						          <!-- /.info-box -->
						        </div>
						        <!-- /.col -->
						      </div>
						      <!-- /.row -->
					       </section>
				    </section>
			    <!-- /.content -->
			  </div>
		  <!-- /.content-wrapper -->	

		<?php
         $this->load->view('components/footer');
   		?>
		
	</body>
<!-- jQuery 3 -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="<?=base_url()?>resource/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="<?=base_url()?>resource/dist/js/demo.js"></script>

</html>
