<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<?php
       $this->load->view('components/link');
	?>
	  <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/bootstrap-daterangepicker/daterangepicker.css");?>"/>
      <!-- bootstrap datepicker -->
       <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css");?>"/>
      <!-- iCheck for checkboxes and radio inputs -->
       <link rel="stylesheet" href="<?php echo base_url("resource/plugins/iCheck/all.css");?>"/>
      <!-- Bootstrap Color Picker -->
       <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css");?>"/>
      <!-- Bootstrap time Picker -->
       <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/bootstrap-daterangepicker/daterangepicker.css");?>"/>
      <!-- Select2 -->
       <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/select2/dist/css/select2.min.css");?>"/>
        <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css");?>"/>
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
		
			 <section class="content-header">	
			       <h1>Employee Register</h1>
			       		<ol class="breadcrumb">
							<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
							<li class="active">Registration</li>
						</ol>
				          <section class="content">
				          	
				        		
								  <div class="box box-primary pad-profile">
											     		<div class="box-header with-border">
											        		<h3 class="box-title">Register <small></small></h3>
											      		</div>
												      		<div class="box-body box-profile">
												        			<form action="" method="post">
											            					 <div class="row">
											                 					<div class="col-lg-4 input_field_sections">
											                  						<h5>First Name <span style="color: #cc0000">*</span></h5>
																						<input required type="text" class="form-control" name="firstname" value=""/>
											                                        </div>
											                                        <div class="col-lg-4 input_field_sections">
											                                            <h5>Last Name <span style="color: #cc0000">*</span></h5>
																						<input required type="text" class="form-control" name="lastname" value=""/>
											                                        </div>
																					
											                                        <div class="col-lg-4 input_field_sections">
											                                            <h5>Middle Name <span style="color: #cc0000">*</span></h5>
																						<input required type="text" class="form-control" name="middlename" value=""/>
											                                        </div>
											                                   </div>
																				
											                                    <div class="row">
											                                    	<div class="col-lg-3 input_field_sections">
											                                            <h5>Position <span style="color: #cc0000">*</span></h5>
																						     <div class="form-group">
																			                   <select class="form-control" value="position">
																			                    <option>Back End Developer</option>
																			                    <option>Front End Developer</option>
																			                    <option>Graphic Designer</option>        
																			                  </select>
																			                </div>
											                                        </div>

																					<div class="col-lg-3 input_field_sections">
											                                            <h5>Email <span style="color: #cc0000">*</span></h5>
																						<input required  type="email" class="form-control" name="email" value=""/>
											                                        </div>
																					
																				    <div class="col-lg-3 input_field_sections">
											                                            <h5>Mobile <span style="color: #cc0000">*</span></h5>
																						<input required="" type="text" class="form-control" name="mobile" value=""/>
											                                        </div>
																					
																					<div class="col-lg-3 input_field_sections">
												                                        <div class="form-group">
																				               <h5>Birth Date <span style="color: #cc0000">*</span></h5>

																				                <div class="input-group date">
																				                  <div class="input-group-addon">
																				                    <i class="fa fa-calendar"></i>
																				                  </div>
																				                  <input type="text" class="form-control pull-right" id="datepicker">
																				                </div>
																				                <!-- /.input group -->
																				              </div>
																				              <!-- /.form group -->
											                                        </div>
											                                    </div>

											                                       
											                                    
																				
											                                    <div class="row">
																					<div class="col-lg-8 input_field_sections">
											                                            <h5>Address <span style="color: #cc0000">*</span></h5>
																						<textarea required="" name="address" class="form-control"></textarea>
																				    </div>
																				    <label class="col-lg-4"></label>
																	            </div>
																				
											                                <div class="row">
											                                	<div class="col-lg-8">
											                                	</div>
											                                	<div class="col-lg-4">
											                                		       <button type="button" class="btn btn-block btn-primary btn-lg">Save</button>
											                                	</div>	
											                                </div>
															   </form>
											          		 </div>
											           

														          <div class="box">
														            <div class="box-header">
														              <h3 class="box-title">Employee</h3>
														            </div>
														            <!-- /.box-header -->
														            <div class="box-body">
														              <table id="example1" class="table table-bordered table-striped">
														                <thead>
														                <tr>
														                  <th>Employee ID</th>
														                  <th>Name</th>
														                  <th>Position</th>
														                  <th>Action</th>
														                  
														                </tr>
														                </thead>
														                <tbody>
														                <tr>
														                  <td>Trident</td>
														                  <td>Internet
														                    Explorer 4.0
														                  </td>
														                  <td>Win 95+</td>
														                  <td> 
														                  	 <button class="btn btn-primary" onclick=""><i class="glyphicon glyphicon-pencil"></i></button> | 
												              			    <button class="btn btn-danger" onclick=""><i class="glyphicon glyphicon-remove"></i></button>
												              			  </td>
														                
														                </tr>
														                <tr>
														                  <td>Trident</td>
														                  <td>Internet
														                    Explorer 5.0
														                  </td>
														                  <td>Win 95+</td>
														                  <td> 
														                   	<button class="btn btn-primary" onclick=""><i class="glyphicon glyphicon-pencil"></i></button> | 
												              			    <button class="btn btn-danger" onclick=""><i class="glyphicon glyphicon-remove"></i></button>
												              			  </td>
														                
														                </tr>
														                <tr>
														                  <td>Trident</td>
														                  <td>Internet
														                    Explorer 5.5
														                  </td>
														                  <td>Win 95+</td>
																		  <td> 
																		  	<button class="btn btn-primary" onclick=""><i class="glyphicon glyphicon-pencil"></i></button> | 
												              			    <button class="btn btn-danger" onclick=""><i class="glyphicon glyphicon-remove"></i></button>
												              			  </td>
														              
														                </tr>
														                
														                </tbody>
														                <tfoot>
														                <tr>
														                    <th>Employee ID</th>
														                  <th>Name</th>
														                  <th>Position</th>
														                  <th>Action</th>
														                </tr>
														      			</tfoot>
																	</table>
																</div>
														            <!-- /.box-body -->
															</div>
														          <!-- /.box -->
								</div>
						</section>
				       
				</section>
				 </div>
		
	  <?php
         $this->load->view('components/footer');
    ?>
		
	
	</body>

<!-- jQuery 3 -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script type="text/javascript" src="<?=base_url()?>resource/plugins/input-mask/jquery.inputmask.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script type="text/javascript" src="<?=base_url()?>resource/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script type="text/javascript" src="<?=base_url()?>resource/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="<?=base_url()?>resource/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="<?=base_url()?>resource/dist/js/demo.js"></script>
<!-- Page script -->
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })

    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</html>
