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
        padding-top: 10px;
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
        background-color: #E8E8E8;
        color: red;
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
    }
    .pad-below{
        padding-bottom: 20px;
    }
    .pad-else{
        padding-top: 70px;
        padding-left: 10px;
    }
    .button2{
        color:#E8E8E8;
        background-color:#E8E8E8;
        font-size:30px;
        float:right;
    }
	
	.jumbotron {
		padding-left: 10px !important;
		padding-right:10px !important;
	}
	.btn {
    float: right;
	background-image: linear-gradient(#000000, #5bc0de 60%, #1c1e22); 
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
var CRLF = 10;
var BULLET = String.fromCharCode(9899);

function Init() {
  if (ingredients.addEventListener) ingredients.addEventListener("input", OnInput, false);
}

function OnInput(event) {
  chars = event.target.value.substr(-1).charCodeAt(0);
  nowLen = ingredients.value.length;

  if (nowLen > prevLen.value) {
    if (chars == CRLF) ingredients.value = ingredients.value + BULLET + " ";
    if (nowLen == 1) ingredients.value = BULLET + " " + ingredients.value;
  }
  prevLen.value = nowLen;
}
$(document).ready(function()
  {
    $('#races').dataTable(
      {
      "aProcessing": true,
      "aServerSide": true,
      "ajax": "stats.php",
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal(
              {
              header: function (row) {
                  var data = row.data();
                  return data[0]
                }
              }
            ),
          renderer: $.fn.dataTable.Responsive.renderer.tableAll(
              {
              tableClass: 'table'
              }
            )
          }
        }
      }
    );
	$('#races1').dataTable(
      {
      "aProcessing": true,
      "aServerSide": true,
      "ajax": "stats1.php",
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal(
              {
              header: function (row) {
                  var data = row.data();
                  return data[0]
                }
              }
            ),
          renderer: $.fn.dataTable.Responsive.renderer.tableAll(
              {
              tableClass: 'table'
              }
            )
          }
        }
      }
    );
	$('#races2').dataTable(
      {
      "aProcessing": true,
      "aServerSide": true,
      "ajax": "stats2.php",
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal(
              {
              header: function (row) {
                  var data = row.data();
                  return data[0]
                }
              }
            ),
          renderer: $.fn.dataTable.Responsive.renderer.tableAll(
              {
              tableClass: 'table'
              }
            )
          }
        }
      }
    );
	$('#races3').dataTable(
      {
      "aProcessing": true,
      "aServerSide": true,
      "ajax": "stats3.php",
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal(
              {
              header: function (row) {
                  var data = row.data();
                  return data[0]
                }
              }
            ),
          renderer: $.fn.dataTable.Responsive.renderer.tableAll(
              {
              tableClass: 'table'
              }
            )
          }
        }
      }
    );
	$('#races4').dataTable(
      {
      "aProcessing": true,
      "aServerSide": true,
      "ajax": "stats4.php",
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal(
              {
              header: function (row) {
                  var data = row.data();
                  return data[0]
                }
              }
            ),
          renderer: $.fn.dataTable.Responsive.renderer.tableAll(
              {
              tableClass: 'table'
              }
            )
          }
        }
      }
    );
	$('#races5').dataTable(
      {
      "aProcessing": true,
      "aServerSide": true,
      "ajax": "stats5.php",
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal(
              {
              header: function (row) {
                  var data = row.data();
                  return data[0]
                }
              }
            ),
          renderer: $.fn.dataTable.Responsive.renderer.tableAll(
              {
              tableClass: 'table'
              }
            )
          }
        }
      }
    );
    $('#recipeForm').formValidation(
      {
      framework: 'bootstrap',
      icon: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
        },
      fields: {
        username: {
          row: '.col-xs-4',
          validators: {
            notEmpty: {
              message: 'The username is required'
              },
            stringLength: {
              min: 6,
              max: 30,
              message: 'The username must be more than 6 and less than 30 characters long'
              },
            regexp: {
              regexp: /^[a-zA-Z0-9_\.]+$/,
              message: 'The username can only consist of alphabetical, number, dot and underscore'
              }
            }
          },
        email: {
          row: '.col-xs-4',
          validators: {
            notEmpty: {
              message: 'The email address is required'
              },
            emailAddress: {
              message: 'The input is not a valid email address'
              }
            }
          },
        recipe: {
          row: '.col-xs-4',
          validators: {
            notEmpty: {
              message: 'The password is required'
              },
            stringLength: {
              min: 4,
              max: 30,
              message: 'The recipe must be more than 4 and less than 30 characters long'
              }
            }
          },
        cookTime: {
          row: '.col-xs-4',
          validators: {
            notEmpty: {
              message: 'The cook time of this recipe is required'
              }
            }
          },
        cuisine: {
          row: '.col-xs-4',
          validators: {
            notEmpty: {
              message: 'The cuisine of this recipe is required'
              }
            }
          },
        difficulty: {
          row: '.col-xs-4',
          validators: {
            notEmpty: {
              message: 'The difficulty of this recipe is required'
              }
            }
          },
        ingredients: {
          row: '.col-xs-4',
          validators: {
            notEmpty: {
              message: 'The ingredients for this recipe are required'
              }
            }
          },
        instructions: {
          row: '.col-xs-4',
          validators: {
            notEmpty: {
              message: 'The instructions for this recipe are required'
              }
            }
          }
        }
      }
    );
  }
);
</script>
<title>betbirdy </title>
</head>
<body onload="Init ();">
<!-- bootstrap code -->
<?php include "navbar.php" ?>
<div class="container pad-else">
    <!-- Section 1: SignUp Form -->
    <h1 class="textbg"> Race Statistics </h1>


    <div id="section2" class="row">
			<div class="col-md-12">
			<h2> Race Winner - View 1 
					<!-- Trigger the modal with a button -->
			</h2>
			<div class="table-responsive">
					<table id="races" class="table table-striped table-bordered nowrap jumbotron" cellspacing="0" width="85%">
						<thead>
							<tr>
								<th>EventLocation</th>
								<th>Date&Time</th>
								<th>PrizePool</th>
								<th>Distance</th>
								<th>Weather</th>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>AverageSpeed</th>
								<th>TrainerName</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>EventLocation</th>
								<th>Date&Time</th>
								<th>PrizePool</th>
								<th>Distance</th>
								<th>Weather</th>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>AverageSpeed</th>
								<th>TrainerName</th>
							</tr>
						</tfoot>
					</table>
			</div>
			<div class="col-md-12">
			<h2> Top Breeds - View 2
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Open Modal</button>
			</h2>
			<!-- Modal -->
			<div id="myModal1" class="modal fade" role="dialog">
			  <div class="modal-admin">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Top Breeds - View 2</h4>
				  </div>
				  <div class="modal-body">

				  <div class="table-responsive">
					<table id="races1" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PigeonName</th>
								<th>Breed</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>PigeonName</th>
								<th>Breed</th>
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
			<h2> Better Than Average Pigeons Per Trainer - View 3
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Open Modal</button>
			</h2>
			<!-- Modal -->
			<div id="myModal2" class="modal fade" role="dialog">
			  <div class="modal-admin">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Better Than Average Pigeons Per Trainer - View 3</h4>
				  </div>
				  <div class="modal-body">

				  <div class="table-responsive">
					<table id="races2" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>AverageSpeed</th>
								<th>TrainerName</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>AverageSpeed</th>
								<th>TrainerName</th>
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
			<h2> Members Favorite Pigeons - View 4
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Open Modal</button>
			</h2>
			<!-- Modal -->
			<div id="myModal3" class="modal fade" role="dialog">
			  <div class="modal-admin">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Members Favorite Pigeons - View 4</h4>
				  </div>
				  <div class="modal-body">

				  <div class="table-responsive">
					<table id="races3" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>TrainerName</th>
								<th>PigeonName</th>
								<th>Breed</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>TrainerName</th>
								<th>PigeonName</th>
								<th>Breed</th>
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
			<h2> Elite Pigeons - View 5
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Open Modal</button>
			</h2>
			<!-- Modal -->
			<div id="myModal4" class="modal fade" role="dialog">
			  <div class="modal-admin">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Elite Pigeons - View 5</h4>
				  </div>
				  <div class="modal-body">

				  <div class="table-responsive">
					<table id="races4" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>PigeonRanking</th>
								<th>WinRate</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>PigeonRanking</th>
								<th>WinRate</th>
							</tr>
						</tfoot>
					</table>
					<h4 class="modal-title">Worst Pigeons</h4>
					<table id="races5" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>PigeonRanking</th>
								<th>WinRate</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>PigeonName</th>
								<th>Breed</th>
								<th>PigeonRanking</th>
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
