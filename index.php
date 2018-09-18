<?php
/**
 * Created by PhpStorm.
 * User: Layangi
 * Date: 9/13/2018
 * Time: 7:11 PM
 */

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.min.js"></script>

    <title> Double Submit Cookies Patterns </title>

</head>
<body>

<style>

    body {
        background-image: url("images/bck.jpg");
    }

</style>

<center><h2>CSRF Protection via Double Submit Cookies Patterns </h2></center>

<div class="login-box">




<center>

    <?php
    if(!isset($_COOKIE['session_cookie'])) {
        echo "<h1><a href='login.php'> Log In </a></h1>";
    }
    ?>
    <br>

            <?php
              if(!isset($_COOKIE['session_cookie'])) {
                echo "<h1><a href='updateData.php'></t>Update Profile</t></a></h1>";
              }
            ?>

      <br>

          <?php
            if(!isset($_COOKIE['session_cookie'])) {
              echo "<h1><a href='logout.php'> Log Out </a></h1>";
            }
          ?>


</center>


</div>
</body>
</html>
