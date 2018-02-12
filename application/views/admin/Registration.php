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
		 @media screen and (min-width: 1000px) {
        .modal-dialog {
          width: 1000px; /* New width for default modal */
        }
        .modal-sm {
          width: 1000px; /* New width for small modal */
        }
    }
    @media screen and (min-width: 992px) {
        .modal-lg {
          width: 1000px; /* New width for large modal */
        }
    }
</style>

     
</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
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
										              <h3 class="box-title">Employee</h3><button onclick="add_emp()" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Add</button>
										            </div>
										            <!-- /.box-header -->
										            <div class="box-body box-profile">
										              <table id="example1" class="table table-bordered table-striped">
										                <thead>
										                <tr>
										                  <th>Employee ID</th>
										                  <th>Name</th>
										                  <th>Position</th>
										                  <th align="center">Action</th>
										                  
										                </tr>
										                </thead>
										                <tbody>
										             <?php foreach($emp as $data){?>
										                <tr>
										                  <td><?php echo $data->emp_id?></td>
										                  <td><?php echo strtoupper($data->firstname);?></td>
										                  <td><?php echo strtoupper($data->position);?></td>
										                  <td> 
										                  	 <button class="btn btn-primary" onclick="edit_emp(<?php echo $data->emp_id ?>)"><i class="glyphicon glyphicon-pencil"></i></button> | 
								              			    <button class="btn btn-danger" onclick="delete_emp(<?php echo $data->emp_id ?>)"><i class="glyphicon glyphicon-remove"></i></button>
								              			  </td>
										                
										                </tr>
										              <?php }?>
										                
										                </tbody>
										                <tfoot>
										                <tr>
										                    <th>Employee ID</th>
										                  <th>Name</th>
										                  <th>Position</th>
										                  <th align="center">Action</th>
										                </tr>
										                </tfoot>
										              </table>
										            </div>
										            <!-- /.box-body -->
										          </div>
										          <!-- /.box -->
								        </section>
								     </section>
								</div>

<?php $this->load->view('components/footer'); ?>
</div>	
			 <div class="modal fade" id="modal_form">
			          <div class="modal-dialog">
			            <div class="modal-content">
			              <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                  <span aria-hidden="true">&times;</span></button>
			                <h4 class="modal-title">Register</h4>
			              </div>
			             	 <div class="modal-body">
		                
				        		<div class="box box-primary pad-profile">
						     		<div class="box-header with-border">
						        	<h3 class="box-title"> <small></small></h3>
						     		 </div>
								      <div class="box-body box-profile">
								            <form action="" method="post" id="form">
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
																                   <select class="form-control" value="position" name="position">
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
									                                        <div class="form-group">
																	               <h5>Birth Date <span style="color: #cc0000">*</span></h5>

																	                <div class="input-group date">
																	                  <div class="input-group-addon">
																	                    <i class="fa fa-calendar"></i>
																	                  </div>
																	                  <input type="text" class="form-control pull-right datepicker" name="birthdate">
																	                </div>
																	                <!-- /.input group -->
																	              </div>
																	              <!-- /.form group -->
										                                        </div>
										                                    </div>
										                               <div class="row">
																			<div class="col-lg-7 input_field_sections">
									                                            <h5>Address <span style="color: #cc0000">*</span></h5>
																				<textarea required="" name="address" class="form-control"></textarea>
																		    </div>
																		   <label class="col-lg-5"></label>
															        </div>
															   </form>
											          		 </div>
											            </div>
		           

		             									 </div>
										              <div class="modal-footer">
										             <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
										            <button type="button" class="btn btn-primary" onclick="save()">Save changes</button>
										           </div>
										         </div>
										            <!-- /.modal-content -->
										       </div>
										          <!-- /.modal-dialog -->
										     </div>
		        <!-- /.modal -->



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
	$( function() {
	  $( ".datepicker" ).datepicker({
			dateFormat: "yy-mm-dd"
		});
  });

  $(function () {
  // 		$('#modal').on('show', function () {
	 //       $(this).find('.modal-body').css({
	 //              width:'auto', //probably not needed
	 //              height:'auto', //probably not needed 
	 //              'max-height':'100%'
	 //       });
		// });
    //Initialize Select2 Elements

    //Date picker
    // $('#datepicker').datepicker({

    //   autoclose: true

    // })




    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  });
</script>



<script type="text/javascript">
	
// function deletes(){
  
//   // if(confirm("Are you sure you want to delete this?"))
//   // {
//   //  var id = [];
   
//   //  $(':checkbox:checked').each(function(i){
//   //   id[i] = $(this).val();
//   //  });
   
//   //  if(id.length === 0) //tell you if the array is empty
//   //  {
//   //   alert("Please Select atleast one checkbox");
//   //  }
//   //  else
//   //  {
//   //   $.ajax({
//   //     url : "<?php echo site_url('')?>/"+id,
//   //     type: "POST",
//   //     dataType: "JSON",
//   //    success:function(data)
//   //    {
//   //     //location.reload();

//   //     for(var i=0; i<id.length; i++)
//   //     {
//   //      $('tr#'+id[i]+'').css('background-color', '#ccc');
//   //      $('tr#'+id[i]+'').fadeOut('slow');

//   //     }
//   //    }
     
//   //   });
//   //  }
   
//   // }
//   // else
//   // {
//   //  return false;
//   // }
//   if(confirm('Are you sure delete this data?'))
//         {
//           // ajax delete data from database

//             // var id = [];
//             //    $(':checkbox:checked').each(function(i){
//             //    id[i] = $(this).val();
//             //     });
   
 
//             $.ajax({
//               url : "<?php echo site_url('')?>/"+id,
//               type: "POST",
//               dataType: "JSON",
//               success: function(data)
//               {
               
//                 location.reload();
//               },
//               error: function (jqXHR, textStatus, errorThrown)
//               {
//                 alert('Error deleting data');
//              }
//           });

//       }
//  }

// ////






   // $(document).ready( function () {
   //    $('#table_id').DataTable();
   //  } );
    var save_method; //for save method string
    var table;

    function delete_emp(id)
      {
        if(confirm('Are you sure delete this data?'))
        {
          // ajax delete data from database

            // var id = [];
            //    $(':checkbox:checked').each(function(i){
            //    id[i] = $(this).val();
            //     });
   
 
            $.ajax({
              url : "<?php echo site_url('')?>/"+id,
              type: "POST",
              dataType: "JSON",
              success: function(data)
              {
               
                location.reload();
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                alert('Error deleting data');
             }
          });

      }

       		 if(response.success){
              $('#deleteModal').modal('hide');
              $('.alert-success').html('Employee Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
              
            }else{
              alert('Error');
            }
    }

    function add_emp()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_emp(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="emp_id"]').val(data.emp_id);
            $('[name="firstname"]').val(data.firstname);
            $('[name="lastname"]').val(data.lastname);
            $('[name="middlename"]').val(data.middlename);
            $('[name="email"]').val(data.email);
            $('[name="birthdate"]').val(data.date);
            $('[name="address"]').val(data.address);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }



    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('Employee/addEmployee')?>";

      }
      else
      {
        url = "<?php echo site_url('')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }




</script>

</body>
</html>
