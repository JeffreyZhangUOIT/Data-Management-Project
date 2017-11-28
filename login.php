<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
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
  }

  .textbg {
    color: white;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    font-weight: bold;
    font-family: arial, helvetica;
    font-size:45px;
  }
  </style>

  <title>Cuisine Origins</title>


</head>
<body>
  <div id="container">
    <div id="login" class="row jumbotron">
      <h1 class="textbg">Login Page</h1>

      <?php
      if ($_POST){
        $username = htmlspecialchars($_POST['username']);
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
        $db = new mysqli('sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'lab');

        // You should see sucess if you can connect
        if($db->connect_errno > 0){
            echo "ERROR";
            die('Unable to connect to database [' . $db->connect_error . ']');
        }
        else {
            echo "Connected to database." . '<br>';
        }

        // Query to return data from your database
        $result = $db->query("SELECT * FROM register WHERE username=\"$username\"
           AND password=\"$password\" ");

           if (!$result) {

               header('Location:http://www.cuisineorigins.tk/index.php', true, '303');
               die('Username or password is incorrect. //[' . $db->error . ']');
               $db->close();
           }
           else {
             $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            $db->close();
            header('Location:userProfile.php', true, '303');
            die('Login Successful.');
           }
      }
      else {
        header('Location:http://www.cuisineorigins.tk/index.php', true, '303');
      }

      ?>
    </div>
  </div>
</body>
</html>
