<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet">
	<link href="{{ asset("/assets/css/font-awesome.min.css") }}" rel="stylesheet">
	<link href="{{ asset("/assets/css/datepicker3.css") }}" rel="stylesheet">
	<link href="{{ asset("/css/styles.css") }}" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
    @include('navigation')
    @include('sidebar')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Admin Profile</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Vehicle Management</h1> -->
			</div>
		</div><!--/.row-->

		<div class="panel panel-default">
					<div class="panel-heading">Profile</div>
					<div class="panel-body">

						<div class="col-md-12">



							<form method="POST">

								<div class="form-group">


                                <div class="col-lg-6">
									<label>Full Name</label>
									<input type="text" class="form-control" value="" id="adminname" name="adminname" required>
								</div>
                                </div>

                                <div class="col-lg-6">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" value="" id="username" name="username" readonly>
								</div>
                                </div>


                                <div class="col-lg-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" value="" readonly>
								</div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
									<label>Contact Number</label>
									<input type="number" class="form-control" name="contactnumber" type="email" value="" required="true">
								</div>
                                </div>

                                    <center>
                                    <button type="submit" class="btn btn-info" name="submit-profile">Make Changes</button>


                                    </center>

								</div> <!--  col-md-12 ends -->
							</form>
						</div>
					</div>




        @include("footer")
	</div>	<!--/.main-->

	<script src="{{ asset("/js/jquery-1.11.1.min.js") }}"></script>
	<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("/js/chart.min.js") }}"></script>
	<script src="{{ asset("/js/chart-data.js") }}"></script>
	<script src="{{ asset("/js/easypiechart.js") }}"></script>
	<script src="{{ asset("/js/easypiechart-data.js") }}"></script>
	<script src="{{ asset("/js/bootstrap-datepicker.js") }}"></script>
	<script src="{{ asset("/js/custom.js") }}"></script>
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

