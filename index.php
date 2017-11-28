<!DOCTYPE html>
<html lang="en">
<head>
  <?php  include 'loginModal.php'?>
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
        padding-top: 35px;
        margin-bottom: -25px;
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
        padding-top: 20px;
        padding-left: 10px;
    }
    table.dataTable.dtr-inline.collapsed>tbody>tr>td:nth-child(8),table.dataTable.dtr-inline.collapsed>tbody>tr>th:nth-child(6) {
        display:none;
    }
    table.dataTable.dtr-inline.collapsed>tbody>tr>td:nth-child(7):after {
        right: 100px;
        /* top: 10px; */
        height: 22px;
        width: 50px;
        /* display: block; */
        position: absolute;
        color: #dbdbdb;
        border: 2px solid white;
        border-radius: 24px;
        box-shadow: 0 0 3px #444;
        box-sizing: content-box;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        line-height: 24px;
        content: 'View';
        background-color: #1c1e22;
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
    jQuery(document).ready(function() {
        jQuery('#Races').dataTable(
            {
            "aProcessing": true,
            "aServerSide": true,
            "ajax": "stats.php",
            responsive: {
                details: {
                    display: jQuery.fn.dataTable.Responsive.display.modal(
                            {
                            header: function (row) {
                                    var data = row.data();
                                    return data[0]
                                }
                            }
                        ),
                    renderer: jQuery.fn.dataTable.Responsive.renderer.tableAll(
                            {
                            tableClass: 'table'
                            }
                        )
                    }
                }
            }
        );
        jQuery('.carousel[data-type="multi"] .item').each(function(){
            var next = jQuery(this).next();
            if (!next.length) {
                next = jQuery(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo(jQuery(this));

            for (var i=0;i<2;i++) {
                next=next.next();
                if (!next.length) {
                        next = jQuery(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo(jQuery(this));
            }
        });
    });
</script>
<title>betbirdy </title>
</head>
<body>
<!-- bootstrap code -->
<?php include 'navbar.php' ?>

<div class="container">
    <!-- Section 1: Picture & Text  -->
    <div id="section1" class="row">
        <h1 class="textbg">Home</h1>
        <div class="col-md-6">
        <img src="images/main.jpg" class="img-responsive" style="height:300px;width:550px" alt="main">
        </div>
        <div class="col-md-6">
            <div class="jumbotron">
                <p class="pad-below pad-else" style="font-size:16px">Welcome to PigeonBetters the first betting website for pigeon races! Here we have information of past races and prizes for all future bets.</p>
		<p class="pad-below pad-else" style="font-size:16px"> Betting on pigeons has more advantages than other gambling sites. This is a website of experience and skill that will allow to bet on a respective pigeon that you believe will ensure you the win. We keep track of statistics, win ratio of each pigeon as well its trainer, and breed.  </p>
            </div>
        </div>
    </div>

    <!-- Section 2: Four Pictures -->
    <div id="section2" class="row">
        <h1 class="textbg"> Information </h1>
        <div class="container text-center">
        <!-- Displays the images in a carousel -->
        <div class="carousel slide row1" data-ride="carousel" data-type="multi" data-interval="10000" id="fcarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="images/p3.jpg" class="img-responsive" style="height:200px;width:275px" alt="p3"></a></div>
                </div>
                <div class="item">
                    <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="images/p2.jpg" class="img-responsive" style="height:200px;width:275px" alt="p2"></a></div>
                </div>
                <div class="item">
                    <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="images/p4.jpg" class="img-responsive" style="height:200px;width:275px" alt="p4"></a></div>
                </div>
                <div class="item">
                    <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="images/p5.jpg" class="img-responsive" style="height:200px;width:275px" alt="p5"></a></div>
                </div>
                <div class="item">
                    <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="images/p7.jpg" class="img-responsive" style="height:200px;width:275px" alt="p7"></a></div>
                </div>
                <div class="item">
                    <div class="col-md-3 col-sm-4 col-xs-12"><a href="#"><img src="images/p6.jpg" class="img-responsive" style="height:200px;width:275px" alt="p6"></a></div>
                </div>
            </div>
            <a class="left carousel-control" href="#fcarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
            <a class="right carousel-control" href="#fcarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron">
                <p class="pad-below pad-else" style="font-size:16px;"> Pigeon racing is a competition based on time and distance that takes the bird to race home.  All pigeons Races are measured by GPS and general races are between 100 km to 900 km distance. </p>
            </div>
        </div>
        <div class="col-md-6r jumbotron">
            <b style="font-size:20px;"> Best Pigeons Races </b>
            <!-- Displays the different cuisines using ordered list -->
            <ol> <br>

                    <li>Timithy's Backyard  - (January 2016) </li>
		    <li>Ashley's Farm  -  (February 2017)</li>
                    <li>Oshawa Center -  (April 2017)</li>
                    <li>Parkland -  (June 2017)</li>
            </ol>
        </div>
    </div>

    <!-- Section 3: Video & Text -->
    <div id="section3" class="row">
        <h1 class="textbg">Professional Pigeon Racing </h1>
            <div class="col-md-6">
                <!-- Youtube Embedded Video -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="879" height="500" src="https://www.youtube.com/embed/LTVcRbkjCAs?rel=0&amp;showinfo=0" frameborder="0" gesture="media" allowfullscreen></iframe>
                </div>
            </div>
        <div class="col-md-6">
            <div class="jumbotron">
                <b style="font-size:20px;">Pigeon of the Month</b>&nbsp;&nbsp;
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal">Click here to check Stats</button>
            </div>

            <div class="col-md12">
                <div class="jumbotron">
                                     
            <b style="font-size:20px;"><br>Professional Trainers</b>&nbsp;&nbsp;
     
 	<table id="xml2" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
   	<thead>
      	<tr>
        <th>Trainer Name</th>
        <th>Rank</th>
        <th>Victories</th>
        </tr>
   	 </thead>

    	<tbody>

  <?php


  $url = ('trainer.xml');
  $xml = simplexml_load_file( urlencode($url), null, true);

  ?>

  	<?php foreach ( $xml->trainer as $t ) 


:?>
      		<tr>
        	<td><?php echo $t->TrainerName; ?></td>
        	<td><?php echo $t->Rank; ?></td>
        	<td><?php echo $t->Victories;?></td>
             	</tr>
 	 <?php endforeach; ?>

   	</tbody>
 	 </table>

			<script type="text/javascript" charset="utf-8">
 			 $(document).ready(function() {
      				$('#example').dataTable( {
         				 "sScrollY": 200,
          				"bJQueryUI": true,
         				 "sPaginationType": "full_numbers"
     					 } );
 				 } );

			</script>

                </div>
            </div>
        </div>
    </div>

    <!-- Section 4: Table -->
    <div id="section4" class="row">
        <h1 class="textbg"> Recent Races </h1>
        <div class="col-md-12">
        <div class="table-responsive">
        <table id="Races" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">
            <thead>
				<tr>
					<th>EventLocation</th>
					<th>Date&Time</th>
					<th>PrizePool</th>
					<th>Distance</th>
					<th>Weather</th>
					<th>PigeonName</th>
					<th>Breed</th>
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
				</tr>
			</tfoot>
        </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Winner pigeon</h3>
                    </div>
                    <div class="modal-body">
                        <div class="col-md12 jumbotron">
                            <b style="font-size:18px;">Pigeon of the month is pikaPEE   CONGRATULATIONS !! </b>
				
                           <table id="xml" class="table table-striped table-bordered nowrap datatable dtr-inline collapsed jumbotron" cellspacing="0" width="100%">



    <thead>
      <tr>
        <th>Pigeon Name</th>
        <th>Rank</th>
        <th>Total Time</th>
        <th>Win/Ratio </th>
      </tr>
    </thead>

    <tbody>

  <?php


  $url = ('pigeon.xml');
  $xml = simplexml_load_file( urlencode($url), null, true);


  ?>

  <?php foreach ( $xml->pigeon as $b ) :?>
      <tr>
        <td><?php echo $b->PigeonName; ?></td>
        <td><?php echo $b->PigeonRanking; ?></td>
       
        <td><?php echo $b->TotalTime;?></td>

        <td><?php echo $b->WinRate; ?></td>
      </tr>
  <?php endforeach; ?>

   </tbody>
  </table>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
      $('#example').dataTable( {
          "sScrollY": 200,
          "bJQueryUI": true,
          "sPaginationType": "full_numbers"
      } );
  } );
</script>
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
