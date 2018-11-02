<!DOCTYPE html>
<html>
<head>
<?php include 'application/views/inc/top.inc.php'; ?>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
	<?php include 'inc/header.inc.php'; ?>
  
	<?php include 'inc/sidemenu.inc.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>View Applications</h1>      
    </section>
	
	<section class="breedcrumb_main">
	<ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">View Applications</li>
    </ol>
	</section>
	

    <!-- Main content -->
   <form action="<?php echo site_url('welcome/new_application'); ?>" method="post" >
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
		<div class="box box-default">
			<div class="box-header with-border">
			  <h3 class="box-title">Registered owner</h3>
			</div>
			<div class="box-body">
				

				<div class="row">
					<!-- ./col -->
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">First Name: <font color="red">*</font></label>
						  <input type="text" name="applicationsFirstname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
						</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">Last Name: <font color="red">*</font></label>
						  <input type="text" name="applicationsLastname" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
						</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">Initials: <font color="red">*</font></label>
						  <input type="text" class="form-control" name="applicationsInitials" id="exampleInputEmail1" placeholder="Enter Initials">
						</div>
					</div>
					<!-- ./col -->					
				</div>
				<!-- /.row -->
				<div class="row">
					<!-- ./col -->
					<div class="col-xs-6 col-sm-8">
						<div class="form-group">
						  <label for="exampleInputEmail1">Address: <font color="red">*</font></label>
						  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">
						</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">City: <font color="red">*</font></label>
						  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter City">
						</div>
					</div>
					<!-- ./col -->				
				</div>
				<!-- /.row -->	
				<div class="row">
					<!-- ./col -->
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">Country: <font color="red">*</font></label>
						  <input type="text" class="form-control" name="applicationCountry" id="exampleInputEmail1" placeholder="Enter Address">
						</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">Province: <font color="red">*</font></label>
						  <input type="text" class="form-control" name="applicationProvince" id="exampleInputEmail1" placeholder="Enter City">
						</div>
					</div>
					<!-- ./col -->	
					
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">Postal Code: <font color="red">*</font></label>
						  <input type="text" class="form-control" name="applicationPostal_Code" id="exampleInputEmail1" placeholder="Enter City">
						</div>
					</div>
					<!-- ./col -->				
				</div>
				<!-- /.row -->	
				<div class="row">
					<!-- ./col -->
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">Home Phone: <font color="red">*</font></label>
						  <input type="text" class="form-control" name="applicationHome_Phone" id="exampleInputEmail1" placeholder="Enter Address">
						</div>
					</div>
					<!-- ./col -->
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">Business Phone: <font color="red">*</font></label>
						  <input type="text" class="form-control" name="applicationBusiness_Phone" id="exampleInputEmail1" placeholder="Enter City">
						</div>
					</div>
					<!-- ./col -->	
					
					<div class="col-xs-6 col-sm-4">
						<div class="form-group">
						  <label for="exampleInputEmail1">Email: <font color="red">*</font></label>
						  <input type="email" name="applicationEmail" class="form-control" id="exampleInputEmail1" placeholder="Enter City">
						</div>
					</div>


					<div class="col-xs-6 col-sm-4">
						<div class="form-group"><label>Dealer's comment:</label><textarea name="applicationcomment" id="dealer_notes" style="width:587px;height:100px;" class="form-control" rows="24" cols="80"></textarea></div></div>
					<!-- ./col -->				
				</div>
				<!-- /.row -->							
			</div>
	</div>
	
	<div class="box box-default">
		<div class="box-header with-border">
		  <h3 class="box-title">Dealership Information</h3>
		</div>
		<div class="box-body">
			<div class="row">
				<!-- ./col -->
				<div class="col-xs-6 col-sm-4">
					<div class="form-group">
					  <label for="exampleInputEmail1">Dealership Name: <font color="red">*</font></label>
					  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" name="applicationDealership_name">
					</div>
				</div>
				<!-- ./col -->
				<div class="col-xs-6 col-sm-4">
					<div class="form-group">
					  <label for="exampleInputEmail1">Phone: <font color="red">*</font></label>
					  <input type="text" name="applicationPhone" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
					</div>
				</div>
				<!-- ./col -->
				<div class="col-xs-6 col-sm-4">
					<div class="form-group">
					  <label for="exampleInputEmail1">Dealership Registration: <font color="red">*</font></label>
					  <input type="text" name="applicationDealership_Registration" class="form-control" id="exampleInputEmail1" placeholder="Enter Initials">
					</div>
				</div>
				<!-- ./col -->					
			</div>
			<!-- /.row -->									
		</div>
	</div>
	
	
	<div class="box box-default">
		<div class="box-header with-border">
		  <h3 class="box-title">Vehicle Information</h3>
		</div>
		<div class="box-body">
			<div class="row">
				<!-- ./col -->
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">V.I.N:</label>
					  <input type="text" class="form-control" name="applicationvin" id="exampleInputEmail1" placeholder="Enter First Name">
					</div>
				</div>
				<!-- ./col -->
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Type: <font color="red">*</font></label>
					  <input type="text" class="form-control" name="applicationtype" id="exampleInputEmail1" placeholder="Enter Last Name">
					</div>
				</div>
				<!-- ./col -->
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Year: <font color="red">*</font></label>
					  <input type="text" class="form-control" name="applicationyear" id="exampleInputEmail1" placeholder="Enter Initials">
					</div>
				</div>
				<!-- ./col -->	
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Make: <font color="red">*</font></label>
					  <input type="text" class="form-control" name="applicationmake" id="exampleInputEmail1" placeholder="Enter Initials">
					</div>
				</div>
				<!-- ./col -->					
			</div>
			<!-- /.row -->	
			<div class="row">
				<!-- ./col -->
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Model: <font color="red">*</font></label>
					  <input type="text" class="form-control" name="applicationmodel" id="exampleInputEmail1" placeholder="Enter First Name">
					</div>
				</div>
				<!-- ./col -->
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Transmission: </label>
					  <input type="text" class="form-control" name="applicationTransmission" id="exampleInputEmail1" placeholder="Enter Last Name">
					</div>
				</div>
				<!-- ./col -->
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Fuel: <font color="red">*</font></label>
					  <input type="text" class="form-control" name="applicationFuel" id="exampleInputEmail1" placeholder="Enter Initials">
					</div>
				</div>
				<!-- ./col -->	
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Body Type: <font color="red">*</font></label>
					  <input type="text" class="form-control" name="applicationBody_Type" id="exampleInputEmail1" placeholder="Enter Initials">
					</div>
				</div>
				<!-- ./col -->					
			</div>
			<!-- /.row -->
			<div class="row">
				<!-- ./col -->
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Colour: </label>
					  <input type="text" class="form-control" name="applicationColour" id="exampleInputEmail1" placeholder="Enter First Name">
					</div>
				</div>
				<!-- ./col -->
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Mileage: <font color="red">*</font></label>
					  <input type="text" class="form-control" name="applicationMileage" id="exampleInputEmail1" placeholder="Enter Last Name">
					</div>
				</div>
				<!-- ./col -->
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Purchase Price: <font color="red">*</font></label>
					  <input type="text" class="form-control" name="applicationPurchase_Price" id="exampleInputEmail1" placeholder="Enter Initials">
					</div>
				</div>
				<!-- ./col -->	
				<div class="col-xs-6 col-sm-3">
					<div class="form-group">
					  <label for="exampleInputEmail1">Financial Institution: <font color="red">*</font></label>
					  <input type="text" class="form-control" name="applicatioinFinancial_Institution" id="exampleInputEmail1" placeholder="Enter Initials">
					</div>
				</div>



				<div class="col-xs-6 col-sm-3">
					<button type="submit" name="new_applictio" class="float-right btn btn-primary">Submit</button>
				</div>




				<!-- ./col -->					
			</div>
			<!-- /.row -->									
		</div>
	</div>
	
    </section>
</form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center">
    <strong>Copyright &copy; Peel Cars 2018. All Rights Reserved</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script>
  $(function () {
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
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
