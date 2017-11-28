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
        padding-top: 100px;
        padding-left: 10px;
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
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/formValidation.min.js"></script>
<script src="js/framework/bootstrap.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.min.js"></script>
<title>Pigeon Betters</title>

<?php
session_start();
$db = new mysqli('sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'project'); // This will need editing.

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// Insert data into the users table in database.
$sql = $db->prepare("INSERT INTO bets_on(PigeonID, RaceID, BetterID, AmountBet, Odds, TimePlaced) VALUES ( ?, ?, ?, ?, ?, ?)"); // spelling mistake intentional.

// These should come from register.html
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$pigeonID =  htmlspecialchars($_GET['pigeon']);
$raceID = htmlspecialchars($_GET["race"]);
$bet = htmlspecialchars($_GET['bet']);

$result = $db->query("SELECT * FROM betters WHERE UserName=\"$username\"");
$row = $result->fetch_assoc();
$BetterID = $row['BetterID'];
$funds = $row['Amount'];

if (!$BetterID) {
  echo "Failed to find user. ";
  /*
  session_unset();
  session_destroy();
  die();
  */
}

$result2 = $db->query("SELECT SUM(AmountBet) as sum FROM bets_on WHERE RaceID=\"$raceID\" ");
$row = $result2->fetch_assoc();
$denominator = $row[sum];

$result3 = $db->query("SELECT SUM(AmountBet) as sum FROM bets_on WHERE RaceID=\"$raceID\" AND PigeonID=\"$pigeonID\"");
$row = $result3->fetch_assoc();
$numerator = $row[sum];
$odds = $numerator/$denominator;
echo "$numerator, $denominator, $odds";
if (!$odds) {
  $odds = 1;
}
$odds = round($odds, 2);
$dif = $funds - $bet;
if($dif<0){
  echo "Cannot place bet.";
}

$sql->bind_param("iiiids", $pigeonID, $raceID, $BetterID, $bet, $odds, date('Y-m-d h:m:s'));

$sql2 = "UPDATE betters SET Amount=\"$dif\" WHERE UserName =\"$username\"";
if ($db->query($sql2) === TRUE) {
    echo "Amount updated successfully";
} else {
    echo "Error updating record: " . $db->error;
}

// Execute the query, inserting the data
if ($sql->execute() === TRUE) {
    echo "Bets_on updated successfully";
} else {
    echo "Error updating record: " . $db->error;
}
// Close the connection
$sql->close();
$db->close();

echo "Success";
?>

</head>
<body>
<!-- bootstrap code -->
<?php include 'navbar.php' ?>

<div class="container pad-else">
    <!-- Section 1: Completed Message -->
    <div class="jumbotron" style="text-align:center;">
        <h1>Bet Created.</h1>
    </div>
</div>
<!-- Copyright Footer -->
<footer class="footer jumbotron" style="text-align:center;">
    <p class="footer-company-name" style="font-size:20px">Cusine Origins &copy; 2016</p>
</footer>
</body>
</html>
