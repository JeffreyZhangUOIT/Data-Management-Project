<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'loginModal.php' ?>
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
        background-color: #E8E8E8;
        color: red;
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
    }
    .pad-below{
        padding-bottom: 200px;
    }
    .pad-else{
        padding-top: 100px;
        padding-left: 10px;
    }
    .plotBG{
        background-color: #E8E8E8
    }
</style>
<!-- bootstrap plugins -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/formValidation.min.css" rel="stylesheet">
<link href="css/morris.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/formValidation.min.js"></script>
<script src="js/framework/bootstrap.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.min.js"></script>
<!-- Using Javascript to display the multiple images in a carousel -->
<script>
$(document).ready(function() {
    Morris.Line({
        element: 'line-example',
        fillOpacity: '1',
        data: [
        { y: '2006', a: 100, v: 90, i: 30, c: 30 },
        { y: '2007', a: 75,  v: 65, i: 40, c: 40 },
        { y: '2008', a: 50,  v: 40, i: 20, c: 50 },
        { y: '2009', a: 75,  v: 65, i: 50, c: 60 },
        { y: '2010', a: 50,  v: 40, i: 60, c: 70 },
        { y: '2011', a: 75,  v: 65, i: 40, c: 80 },
        { y: '2012', a: 100, v: 80, i: 10, c: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'v', 'i', 'c' ],
        labels: ['American', 'Italian', 'Vietnamese', 'Chinese']
        });
    Morris.Donut({
        element: 'donut-example',
        fillOpacity: '1',
        data: [
        {label: "Italian", value: 12},
        {label: "Chinese", value: 30},
        {label: "Vietnamese", value: 20},
        {label: "American", value: 33}
  ]
});
});
</script>
<title>Cuisine Origins</title>
</head>
<body>
<!-- bootstrap code -->
<?php include 'navbar.php'; ?>
<div class="container pad-else pad-below">
    <!-- Section 1: Graph  -->
    <!-- Graph-->
        <div id="graph" class="row">
            <h1 class="textbg"> Graph </h1>
            <div class="col-md-6 plotBG">
              <div id="line-example" ></div>
            </div>
            <div class="col-md-6 plotBG">
              <div id="donut-example"></div>
            </div>
        </div>
</div>
<!-- Copyright Footer -->
<footer class="footer jumbotron" style="text-align:center;">
    <p class="footer-company-name" style="font-size:20px">Cusine Origins &copy; 2016</p>
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
