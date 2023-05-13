<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/datepicker3.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
				<li class="active">Dashboard</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
                @include('greetings')

			</div>
		</div>

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-car color-blue"></em>
                            {{-- This is hardcoded --}}
							<div class="large">20</div>
							<div class="text-muted">Total Vehicles Parked</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-toggle-on color-orange"></em>
                            {{-- This is hardcoded --}}
							<div class="large">7</div>
							<div class="text-muted">Vehicles IN</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-toggle-off color-teal"></em>
                            {{-- This is hardcoded --}}
							<div class="large">13</div>
							<div class="text-muted">Vehicles OUT</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-clock-o color-red"></em>
                            {{-- This is hardcoded --}}
							<div class="large">0</div>
							<div class="text-muted">Parking Done within 24 hrs</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>


		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Highlights - IN | OUT

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
						<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="myChart" height="160" ></canvas>

						</div>

					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Highlights - Vehicle Category

						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
						<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="myChart2" height="160" ></canvas>

						</div>

					</div>
				</div>
			</div>
		</div> <!-- /.row -->


		{{-- // include 'includes/dbconn.php';
		//  $ret=mysqli_query($con,"SELECT count(ID) id1 from vehicle_info where Status=''");
		//  $row5=mysqli_fetch_array($ret);

		//  $ret=mysqli_query($con,"SELECT count(ID) id2 from vehicle_info where Status='Out'");
		//   $row6=mysqli_fetch_array($ret);

		//   $ret=mysqli_query($con,"SELECT count(ID) as id1 from vehicle_info where VehicleCategory='Two Wheeler'");
		// $row=mysqli_fetch_array($ret);

		// $ret=mysqli_query($con,"SELECT count(ID) as id2 from vehicle_info where VehicleCategory='Four Wheeler'");
		// $row2=mysqli_fetch_array($ret);

		// $ret=mysqli_query($con,"SELECT count(ID) as id4 from vehicle_info where VehicleCategory='Three Wheeler'");
		// $row4=mysqli_fetch_array($ret); --}}



        @include('footer')
	</div>

	<script src="{{ asset("/js/jquery-1.11.1.min.js") }}"></script>
	<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("/js/chart.min.js") }}"></script>
	<script src="{{ asset("/js/chart-data.js") }}"></script>
	<script src="{{ asset("/js/easypiechart.js") }}"></script>
	<script src="{{ asset("/js/easypiechart-data.js") }}"></script>
	<script src="{{ asset("/js/bootstrap-datepicker.js") }}"></script>
	<script src="{{ asset("/js/custom.js") }}"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js'></script>
	<script>
		window.onload = function () {
	// var chart1 = document.getElementById("line-chart").getContext("2d");
	// window.myLine = new Chart(chart1).Line(lineChartData, {
	// responsive: true,
	// scaleLineColor: "rgba(0,0,0,.2)",
	// scaleGridLineColor: "rgba(0,0,0,.05)",
	// scaleFontColor: "#c5c7cc"
	// });

	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	type: 'pie',
	data: {
	labels: ["Vehicle In-Time","Vehicle Out-Time"],
	datasets: [{
	backgroundColor: ["#30a5ff","#33cccc"]
	data: [100,200] // TODO;
	}]
	}
	});

	var ctx = document.getElementById("myChart2").getContext('2d');
	var myChart = new Chart(ctx, {
	type: 'pie',
	data: {
	labels: ["Two Wheeler","Four Wheeler", "Three Wheeler"],
	datasets: [{
        backgroundColor: ["#f55d42","#f5c542", "#6b6b6b"],
        data: [200, 300, 400]
	}]
	}
	});


	};






	</script>


</body>
</html>
