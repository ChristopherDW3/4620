
<?php
  session_start();
  include_once '../includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
</head>
  <body>
<nav>
        <a href="../index.php"><img src="img/logo-white.png" alt="MeTube"></a>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../filemanager.php">Upload</a></li>
          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>Profile Page</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>