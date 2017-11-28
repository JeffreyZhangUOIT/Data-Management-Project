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
<!-- Using Javascript to display the multiple images in a carousel -->
<script>
$(document).ready(function() {
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
            address: {
                row: '.col-xs-4',
                validators: {
					regexp: /^[a-zA-Z0-9\.]+$/,
                        message: 'The address can only consist of alphabetical, number, dot and underscore'
                    }
            },
            favpigeonid: {
                row: '.col-xs-4',
                }
            }
        }
    });
});
</script>
<title>betbirdy</title>
</head>
<body>
<!-- bootstrap code -->
<?php include 'navbar.php' ?>

<div class="container pad-else">
    <!-- Section 1: SignUp Form -->
	
    <form id="signupForm" class="form-horizontal" method="post" action="userCreated.php">
<?php
$db = new mysqli('sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'project'); // This will need editing.

$query = "SELECT PigeonID, PigeonName FROM pigeon";
$result = $db->query($query);


?>
    <div class="form-group">
        <label class="col-xs-3 control-label">Username</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" id ="username" name="username" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Email address</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" id="email" name="email" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" id="password" name="password" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Address</label>
        <div class="col-xs-3">
            <textarea class="form-control" id="address" name="address" rows="4"></textarea>
        </div>
    </div>
	
	<div class="form-group">
        <label class="col-xs-3 control-label">Favorite Pigeon</label>
        <select name="favpigeonid" id="favpigeonid">
			<?php while($row = $result->fetch_assoc()):;?>

            <option value="<?php echo $row[PigeonID];?>"><?php echo $row[PigeonName];?></option>

            <?php endwhile;?>
        </select>
    </div>


    <div class="form-group">
        <div class="col-xs-9 col-xs-offset-3">
            <button type="submit" class="btn btn-primary" name="signup" value="signup">Sign Up</button>
            <button type="reset" class="btn btn-primary" name="reset" value="reset">Reset</button>
        </div>
    </div>
</form>
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
