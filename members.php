<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'loginModal.php'; ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS stylesheet code -->
<style>
    .nodot{
        list-style:none;
    }
    .col-md-6r {
        position: relative;
        min-height: 1px;
        padding-left: -15px;
        padding-right: 15px;
        width: 50%;
        float:left;
    }
    .row {
        padding-top: 25px;
        margin-bottom: -15px;
    }
    .row1 {
        padding-top: 20px;
        padding-bottom: 20px;
        margin-left: -10px;
    }
    .textbg {
        font-weight: bold;
        font-family: arial, helvetica;
        font-size:45px;
        background: url(images/textbg.jpg) 600px 800px;
        color: red;
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
    }
    .pad-below{
        padding-bottom: 20px;
    }
    .pad-else{
        padding-top: 5px;
        padding-left: 20px;
    }
	.btn {
    float: right;
	background-image: linear-gradient(#000000, #5bc0de 60%, #1c1e22); 
	}
	.dataTables_wrapper .dataTables_paginate .paginate_button{
	color:#fff !important;
	}
</style>
<!-- bootstrap plugins -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/formValidation.min.css" rel="stylesheet">
<link href="css/morris.css" rel="stylesheet">
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="css/jquery.dataTables.min.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script src="js/jquery-1.12.3.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/dataTables.responsive.min.js"></script>
<script src="js/responsive.bootstrap4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/formValidation.min.js"></script>
<script src="js/framework/bootstrap.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.min.js"></script>
<script>
$(document).ready(function() {
$('#betters').dataTable( {
 "aProcessing": true,
 "aServerSide": true,
"ajax": "profiles.php",
	} 
);
$('#betters1').dataTable( {
 "aProcessing": true,
 "aServerSide": true,
"ajax": "profiles1.php",
} );
$('#betters2').dataTable( {
 "aProcessing": true,
 "aServerSide": true,
"ajax": "profiles2.php",
} );
$('#betters3').dataTable( {
 "aProcessing": true,
 "aServerSide": true,
"ajax": "profiles3.php",
} );
$('#betters4').dataTable( {
 "aProcessing": true,
 "aServerSide": true,
"ajax": "profiles4.php",
} );
} );

</script>
<title>betbirdy </title>
</head>
<body>
<!-- bootstrap code -->
<?php include 'navbar.php'; ?>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cusine Origins</a>
        </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html#section1">Home</a></li>
                        <li><a href="index.html#section2">Gallery</a></li>
                        <li><a href="index.html#section3">Recipe of the Month</a></li>
                        <li><a href="index.html#section4">Popularity Rankings</a></li>
                        <li><a href="recipes.html">Recipes</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="profiles.html">Members</a></li>
                        <li><a href="plots.html">Plots</a></li>
                </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container pad-else">
    <!-- Section 1: SignUp Form -->
	<div class="col-md-12 row">
		<h3>Player Rankings - View 6 </h3>
		<div class="table-responsive">
			<table id="betters" class="table table-striped table-bordered nowrap collapsed jumbotron" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>PlayerRanking</th>
						<th>Username</th>
						<th>Amount</th>
						<th>WinVsLossRatio</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>PlayerRanking</th>
						<th>Username</th>
						<th>Amount</th>
						<th>WinVsLossRatio</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<div class="col-md-12">
			<h3> Trainer Rankings - View 7
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Open Modal</button>
			</h3>
			<!-- Modal -->
			<div id="myModal1" class="modal fade" role="dialog">
			  <div class="modal-admin">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Trainer Rankings - View 7</h4>
				  </div>
				  <div class="modal-body">

				  <div class="table-responsive">
					<table id="betters1" class="table table-striped table-bordered nowrap jumbotron" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Rank</th>
								<th>TrainerName</th>
								<th>Victories</th>
								<th>Points</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Rank</th>
								<th>TrainerName</th>
								<th>Victories</th>
								<th>Points</th>
							</tr>
						</tfoot>
					</table>
					</div>

				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>
				</div>
			  </div>
			</div>
			<div class="col-md-12">
			<h3> Pigeons Rankings - View 8
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Open Modal</button>
			</h3>
			<!-- Modal -->
			<div id="myModal2" class="modal fade" role="dialog">
			  <div class="modal-admin">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Pigeons Rankings - View 8</h4>
				  </div>
				  <div class="modal-body">

				  <div class="table-responsive">
					<table id="betters2" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PigeonRanking</th>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>AverageSpeed</th>
								<th>WinRate</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>PigeonRanking</th>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>AverageSpeed</th>
								<th>WinRate</th>
							</tr>
						</tfoot>
					</table>
					</div>

				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>

			  </div>
			</div>
			</div>
			<div class="col-md-12">
			<h3> Prize Pools - View 9
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Open Modal</button>
			</h3>
			<!-- Modal -->
			<div id="myModal3" class="modal fade" role="dialog">
			  <div class="modal-admin">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Prize Pools - View 9</h4>
				  </div>
				  <div class="modal-body">

				  <div class="table-responsive">
					<table id="betters3" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>DateTime</th>
								<th>EventLocation</th>
								<th>PrizePool</th>
								<th>Distance</th>
								<th>Weather</th>
								<th>PigeonName</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>DateTime</th>
								<th>EventLocation</th>
								<th>PrizePool</th>
								<th>Distance</th>
								<th>Weather</th>
								<th>PigeonName</th>
							</tr>
						</tfoot>
					</table>
					</div>

				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>

			  </div>
			</div>
			</div>
			<div class="col-md-12">
			<h3> Race Participants - View 10
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Open Modal</button>
			</h3>
			<!-- Modal -->
			<div id="myModal4" class="modal fade" role="dialog">
			  <div class="modal-admin">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Race Participants - View 10</h4>
				  </div>
				  <div class="modal-body">

				  <div class="table-responsive">
					<table id="betters4" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>DateTime</th>
								<th>EventLocation</th>
								<th>PigeonName</th>
								<th>Position</th>
								<th>Breed</th>
								<th>FinishingTime</th>
								<th>Weather</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>DateTime</th>
								<th>EventLocation</th>
								<th>PigeonName</th>
								<th>Position</th>
								<th>Breed</th>
								<th>FinishingTime</th>
								<th>Weather</th>
							</tr>
						</tfoot>
					</table>
					</div>

				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  </div>
				</div>

			  </div>
			</div>
			</div>
</div>
<!-- Copyright Footer -->
<footer class="footer jumbotron" style="text-align:center;">
    <p class="footer-company-name" style="font-size:20px">betbirdy &copy; 2017</p>
</footer>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-87401057-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
