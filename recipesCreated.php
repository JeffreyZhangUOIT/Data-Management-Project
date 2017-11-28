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
    .button2{
        color:white;
        background-color:black;
        font-size:28px;
        text-align:right;
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
$db = new mysqli('sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'lab');

// TODO You must process the POST data from the form and then set the variables
// below to be inserted in the database

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
    echo "SUCCESS";
}

// Insert sample data into the database
$sql = $db->prepare("INSERT INTO recipe(username, email, recipe, cookTime, cuisine, difficulty, ingredients, instructions) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

// These should be retrieved from POST variables
$username = $_POST['username'];
$email = $_POST['email'];
$recipe = $_POST['recipe']; // This password needs to be securely hashed
$cookTime = $_POST['cookTime']; // This is one of the dropdown selection options
$cuisine = $_POST['cuisine']; // This is one of the dropdown selection options
$difficulty = $_POST['difficulty'];
$ingredients = $_POST['ingredients'];   // This is an string value
$instructions = $_POST['instructions'];

// Bind the parameters to the SQL query above, s is a string i is an integer
$sql->bind_param("sssisiss", $username, $email, $recipe, $cookTime, $cuisine, $difficulty, $ingredients, $instructions);

// Execute the query, inserting the data
$sql->execute();

// Close the connection
$sql->close();
$db->close();
header("Refresh: 0.5;url=../recipes.php");
?>
<!-- Using Javascript to display the multiple images in a carousel -->
<script>
$(document).ready(function() {
    $('#recipes').dataTable( {
     "aProcessing": true,
     "aServerSide": true,
    "ajax": "recipesTable.php",
    } );
    $('#signupForm').formValidation({
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
            password: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number, and underscore'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            experience: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The cooking experience is required'
                    }
                }
            },
            'cuisine[]': {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'Atleast one cuisine is required'
                    }
                }
            },
            gender: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            comments: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'Please enter some comments for this website'
                    }
                }
            }
        }
    });
});
</script>
<title>Cuisine Origins</title>
</head>
<body>
<!-- bootstrap code -->
<?php include 'navbar.php'; ?>

<div class="container pad-else">
    <div class="container pad-else">
        <!-- Completed Message -->
        <div class="jumbotron" style="text-align:center;">
            <h1>Your Recipe Has Been Added.</h1>
        </div>
    </div>
</div>
<!-- Copyright Footer -->
<footer class="footer jumbotron" style="text-align:center;">
    <p class="footer-company-name" style="font-size:20px">Cusine Origins &copy; 2016</p>
</footer>
</body>
</html>
