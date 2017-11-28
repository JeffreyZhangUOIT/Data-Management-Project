<?php
$db = new mysqli('sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'project'); // This will need editing.

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// Insert data into the users table in database.
$sql = $db->prepare("INSERT INTO betters(UserName, Password, Email, Address, FavoritePigeonID) VALUES (?, ?, ?, ?, ?)");

$query = "SELECT PigeonID FROM `pigeon`";
$result = mysqli_query($connect, $query);

$options = "";

while($row2 = mysqli_fetch_array($result))
{
    $options = $options."<option>$row2[1]</option>";
}

// These should come from register.html
$username = $_POST['username'];
$email = $_POST['email'];
$insecure_pass = $_POST['password'];
$address =  $_POST['address'];
$favoritepigeonid = $_POST['favpigeonID'];

// Bind the parameters to the SQL query above, s is a string i is an integer
$sql->bind_param("ssssiiii", $username, $password, $email, $address, $favoritepigeonid); // Put address back in later?

// Execute the query, inserting the data
$sql->execute();

// Close the connection
$sql->close();
$db->close();

?>
