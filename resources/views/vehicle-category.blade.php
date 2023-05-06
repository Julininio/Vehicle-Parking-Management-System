<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VPS</title>
	<link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet">
	<link href="{{ asset("/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/css/datatable.css") }}" rel="stylesheet">
	<link href="{{ asset("/css/datepicker3.css") }}" rel="stylesheet">
	<link href="{{ asset("/css/styles.css") }}" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
        <?php include 'includes/navigation.php' ?>
        @include("navigation")
        @include("sidebar")

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="{{ url("dashboard.php") }}">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Vehicle Category Management</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Vehicle Management</h1> -->
			</div>
		</div><!--/.row-->

		<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Vehicle Categories <a href="{{ url("add-category.php") }}" type="button" class="btn btn-sm btn-primary">Add New Vehicle Category</a></div>
						<div class="panel-body">
                        <table id="example" class="table table-striped table-hover table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>#</th>
                <th>Vehicle Category</th>
                <th>Published On</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
        <?php
        $ret=mysqli_query($con,"SELECT * from  vcategory");
        $cnt=1;
        while ($row=mysqli_fetch_array($ret)) {

        ?>

            <tr>

            <td>Hardcoded</td>

            <td>Hardcoded</td>

            <td>Hardcoded/td>

            <td><a href="hardcoded"> <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button> </a>
            <a href="hardcoded"> <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button> </a>
            </td>

            </tr>



        </tbody>

    </table>
						</div>
					</div>
				</div>



</div><!--/.row-->




        <?php include 'includes/footer.php'?>
	</div>	<!--/.main-->

	<script src="{{ asset("/js/jquery-1.11.1.min.js") }}"></script>
	<script src="{{ asset("/js/bootstrap.min.js") }}"></script>
	<script src="{{ asset("/js/chart.min.js") }}"></script>
	<script src="{{ asset("/js/chart-data.js") }}"></script>
	<script src="{{ asset("/js/easypiechart.js") }}"></script>
	<script src="{{ asset("/js/easypiechart-data.js") }}"></script>
	<script src="{{ asset("/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("/js/dataTables.bootstrap4.min.js") }}"></script>
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

    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

</body>
</html>

<?php }  ?>
