<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  session_unset();
  session_destroy();
  header("Location: index.php");
  ?>
</head>
</html>
