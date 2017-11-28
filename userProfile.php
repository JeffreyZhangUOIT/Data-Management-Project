<?php
include 'loginModal.php';
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
    margin-bottom: -15px;
  }

  .textbg {
    background: url(http://65.media.tumblr.com/64718993f98e606f540ef468f4b60717/tumblr_o0yhouvdqM1sqcorto1_1280.jpg) 600px 800px;
    color: red;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    font-weight: bold;
    font-family: arial, helvetica;
    font-size:45px;
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
        next.children(':first-child').clone().appendTo($(this));
      }
    });
  });
  </script>

  <title>betbirdy </title>

  <!-- Grabs data from database -->
  <?php
  session_start();
  $db = new mysqli('sofe2800.c0h6qxbwqnzj.us-east-1.rds.amazonaws.com', 'admin', 'sofe2800project', 'project');

  // You should see sucess if you can connect
  if($db->connect_errno > 0){
      echo "ERROR";
      die('Unable to connect to database [' . $db->connect_error . ']');
  }
  else {
      echo "SUCCESS" . '<br />';
  }
  $username = htmlspecialchars($_SESSION['username']);
  $password = htmlspecialchars($_SESSION['password']);
  $result = $db->query("SELECT * FROM betters WHERE UserName=\"$username\" ");
  $races = $db->query("SELECT EventLocation, RaceID FROM races WHERE WinnerPigeonID IS NULL");
  $pigeons = $db->query("SELECT PigeonName, PigeonID FROM pigeon, participate_in AS p,
                        races AS r WHERE p.ParticipatingPigeonsID=pigeon.PigeonID
                        AND p.RaceID = r.RaceID AND r.WinnerPigeonID IS NULL");

  if (!$result) {
      die('There was an error running the query[' . $db->error . ']');
  }

  while ($row = $result->fetch_assoc()) {
    $id = $row['BetterID'];
    $username = htmlspecialchars($row['UserName']);
    $email = htmlspecialchars($row['Email']);
    $address = htmlspecialchars($row['Address']);
    $amount = htmlspecialchars($row['Amount']);
    $winloss = htmlspecialchars($row['WinVsLossRatio']);
    $ranking = htmlspecialchars($row['PlayerRanking']);

}
  ?>
  <script>
  .logout {

  }
  </script>

</head>
<body>
  <!-- Navigation Bar  -->
<?php include 'navbar.php' ?>

  <div class="container">

<!-- User Profile Page -->
    <div id="userProfile" class="row jumbotron">
      <h1 class="textbg"> <?php
      if (!isset($email)) {
        echo "User not found.";
        session_unset();
        session_destroy();
        die ();
    }
    else {
      echo $username;}   ?></h1>

      <!-- User Infromation Categories -->
      <div class="col-md-4">
        <div class="form-group">
          <p> Username: <br>
            Email: <br>
            Address: <br>
            Amount: <br>
            Win/LossRatio: <br>
            PlayerRanking: <br>
          </p>
        </div>
      </div>

      <!-- Category Values -->
      <div class="col-md-8">
        <div class="form-group">
          <p>
            <?php  echo $username; ?> <br>
            <?php  echo $email; ?> <br>
            <?php echo $address; ?> <br>

            <!-- Loops through each value of $specialties to display them. -->
            <?php echo $amount?> <br>
              <?php echo $winloss; ?> <br>
              <?php echo $ranking; ?> <br>

            <br>

            </p>
          </div>
        </div>
        <div class="row-8">
            <p>Place a bet! </p>
            <form id="bet" class="form-horizontal" method="get" action="bets.php">
              <div class="form-group">
                  <label class="col-xs-3 control-label">Race</label>
                  <div class="col-xs-5">
                    <select name="race" id="race">
                    <?php while($row = $races->fetch_assoc()):;?>

                          <option class="text-info" value="<?php echo $row['RaceID'];?>"><?php echo $row['EventLocation'];?></option>

                          <?php endwhile;?>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-xs-3 control-label">Pigeon</label>
                  <div class="col-xs-5">
                    <select name="pigeon" id="pigeon">
                      <?php while($row = $pigeons->fetch_assoc()):;?>

                        <option class="text-info" value="<?php echo $row['PigeonID'];?>"><?php echo $row['PigeonName'];?></option>

                      <?php endwhile;?>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-xs-3 control-label">Amount</label>
                  <div class="col-xs-5">
                      <input type="number" class="form-control" id ="bet" name="bet" />
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-xs-9 col-xs-offset-3">
                      <button type= "reset" class="btn btn-primary" value="reset">Reset</button>
                      <button type="submit" class="btn btn-primary" name="signup" value="signup">Place Bet!</button>
                  </div>
              </div>
          </form>
        </div>
        <div class="row-8">
        <p> Dump database into XML </p>
        <form id="xml" class="form-horizontal" method="get" action="dumpxml.php">
            <div class="form-group">
                <label class="col-xs-3 control-label">Table Name</label>
                <select class="col-xs-5" name="tname" id="tname">
              <?php
              $result2 = $db->query("show tables");
              while($row = $result2->fetch_assoc()):;?>

                    <option class="text-info" value="<?php echo $row['Tables_in_project'];?>"><?php echo $row['Tables_in_project'];?></option>

                    <?php endwhile;?>
                </select>
            </div>
            <div class="form-group">
              <div class="col-xs-9 col-xs-offset-3">
                  <button type="submit" class="btn btn-primary" name="dump" value="dumpxml">Backup Database</button>
              </div>
            </div>
        </form>
      </div>
          <button type="button" class="btn btn-default" onclick="location.href='logout.php';" >Logout</button>
        </div>
      </div>
    <footer class="footer jumbotron" style="text-align:center;">
      <p class="footer-company-name" style="font-size:20px">betbirdy &copy; 2017</p>
    </footer>
  </body>
  </html>
