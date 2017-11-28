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
<?php
$db = new mysqli('sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'project'); // This will need editing.

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$query = "SELECT MAX(PlayerRanking)+1 as max FROM betters";
$result = $db->query($query);
$row = $result->fetch_assoc();

// Insert data into the users table in database.
$sql = $db->prepare("INSERT INTO betters(UserName, Password, Email, Address, FavoritePigeonID, PlayerRanking) VALUES (?, ?, ?, ?, ?, ?)");
// These should come from register.html
$username = $_POST['username'];
$email = $_POST['email'];
$insecure_pass = $_POST['password'];
$address =  $_POST['address'];
$favoritepigeonid = $_POST['favpigeonid'];
$rank = $row[max];
// Securely hash the password
$password = password_hash($insecure_pass, PASSWORD_DEFAULT);

// Bind the parameters to the SQL query above, s is a string i is an integer
$sql->bind_param("ssssss", $username, $password, $email, $address, $favoritepigeonid, $rank); // Put address back in later?

// Execute the query, inserting the data
$sql->execute();

// Close the connection
$sql->close();
$db->close();
?>

<title>Cuisine Origins</title>
</head>
<body>
<!-- bootstrap code -->
<?php include 'navbar.php' ?>

<div class="container pad-else">
    <!-- Section 1: Completed Message -->
    <div class="jumbotron" style="text-align:center;">
        <h1>Account Created.</h1>
    </div>
</div>
<!-- Copyright Footer -->
<footer class="footer jumbotron" style="text-align:center;">
    <p class="footer-company-name" style="font-size:20px">Cusine Origins &copy; 2016</p>
</footer>
</body>
</html>
