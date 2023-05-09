<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="{{ asset("/assets/css/font-awesome.min.css") }}" rel="stylesheet">
	<link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet">
	<link href="{{ asset("/assets/css/datepicker3.css") }}" rel="stylesheet">
	<link href="{{ asset("/assets/css/styles.css") }}" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
        @include("navigation")
        @include("sidebar")

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Manage Vehicle</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Vehicle Management</h1> -->
			</div>
		</div><!--/.row-->

		<div class="panel panel-default">
					<div class="panel-heading">Vehicle Entry</div>
					<div class="panel-body">

						<div class="col-md-12">

							<form method="POST" action="/manage-vehicles">
                                @csrf

								<div class="form-group">
									<label>Registration Number</label>
									<input type="text" class="form-control" placeholder="LOL-1869" id="vehreno" name="RegistrationNumber" required>
								</div>


								<div class="form-group">
									<label>Vehicle's Company Name</label>
									<input type="text" class="form-control" placeholder="Tesla" id="vehcomp" name="VehicleCompanyname" required>
								</div>


									<div class="form-group">
										<label>Vehicle Category</label>
										<select class="form-control" name="VehicleCategory" id="catename">
										<option value="0">Select Category</option>

                                        <option value="Four Wheeler">Four Wheeler</option>
                                        <option value="Two Wheeler">Two Wheeler</option>
                                        <option value="Three Wheeler">Three Wheeler</option>

										</select>
									</div>


								<div class="form-group">
									<label>Owner's Full Name</label>
									<input type="text" class="form-control" placeholder="Enter Here.." id="ownername" name="OwnerName" required>
								</div>


								<div class="form-group">
									<label>Owner's Contact</label>
									<input type="text" class="form-control" placeholder="Enter Here.." maxlength="10" pattern="[0-9]+" id="ownercontno" name="OwnerContactNumber" required>
								</div>


									<button type="submit" class="btn btn-success" name="submit-vehicle">Submit</button>
									<button type="reset" class="btn btn-default">Reset</button>
								</div> <!--  col-md-12 ends -->
							</form>
						</div>
					</div>




        @include('footer')
	</div>	<!--/.main-->

	<script src="{{ asset("/assets/js/jquery-1.11.1.min.js") }}"></script>
	<script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("/assets/js/chart.min.js") }}"></script>
	<script src="{{ asset("/assets/js/chart-data.js") }}"></script>
	<script src="{{ asset("/assets/js/easypiechart.js") }}"></script>
	<script src="{{ asset("/assets/js/easypiechart-data.js") }}"></script>
	<script src="{{ asset("/assets/js/bootstrap-datepicker.js") }}"></script>
	<script src="{{ asset("/assets/js/custom.js") }}"></script>
	<script>
		window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
};
	</script>

</body>
</html>
