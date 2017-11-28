<?php
session_start();
$db = new mysqli('sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'project'); // This will need editing.

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
$username = $_SESSION['username'];
$password =  password_hash($_SESSION['password'], PASSWORD_DEFAULT);
$sql = "SELECT * FROM Betters WHERE username=$username AND password=$password";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$betterID = $row['BetterID'];
$funds = $row['funds'];
$result->free();

$race = htmlspecialchars($_POST['race']);
$pigeon = htmlspecialchars($_POST['pigeon']);
$bet = htmlspecialchars($_POST['bet']);

if ($bet>$funds){
  echo "Insufficient funds.";
  die();
}

$funds = $funds - $bet
$sql = "UPDATE Betters SET funds=$funds WHERE username=$username AND password=$password ";
$sql2 = "INSERT INTO bets_on(pigeonID, raceID, BetterID, AmountBet, Timeplaced ) VALUES ($pigeon, $race, $betterID, $bet, $_SERVER['REQUEST_TIME'])";
if ($db->query($sql) === TRUE) {
  $db->query($sql2)
  echo "New record created successfully";
}
else {
  echo "Error: " . $sql . "<br>" . $db->error;
}

if

$db->close();

?>
