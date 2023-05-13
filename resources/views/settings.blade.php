<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/datepicker3.css" rel="stylesheet">
	<link href="assets.css/styles.css" rel="stylesheet">

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
				<li class="active">Company Settings</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Vehicle Management</h1> -->
			</div>
		</div><!--/.row-->

		<div class="panel panel-default">
					<div class="panel-heading">Settings</div>
					<div class="panel-body">

						<div class="col-md-12">



							<form method="POST">

								<div class="form-group">


                                    {{-- this is hardcoded --}}
                                <p style="color:red;">Last Updated On: 2021-06-08 20:48:52</p>
                                <div class="col-lg-6">
									<label>Company Name</label>
									<input type="text" class="form-control" value="" name="cname" required>
								</div>
                                </div>

                                <div class="col-lg-6">
								<div class="form-group">
									<label>Company Email</label>
									<input type="email" class="form-control" value="" name="cemail" required>
								</div>
                                </div>


                                <div class="col-lg-6">
								<div class="form-group">
									<label>Website</label>
									<input type="text" class="form-control" name="cwebsite" value="" required>
								</div>
                                </div>

                                <div class="col-lg-6">
                                <div class="form-group">
									<label>Address</label>
									<input type="address" class="form-control" name="caddress" type="email" value="" required="true">
								</div>
                                </div>

                                    <center>
                                    <button type="submit" class="btn btn-info" name="set-settings">Make Changes</button>


                                    </center>

								</div> <!--  col-md-12 ends -->
							</form>
						</div>
					</div>




    @include("footer")
	</div>	<!--/.main-->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chart.min.js"></script>
	<script src="assets/js/chart-data.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/custom.js"></script>
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

