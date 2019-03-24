
<?php

// Should return a PDO
require_once 'config.php';


  try {
    // TODO
    $connectionString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
    $user=DBUSER;
    $pass=DBPASS;
    $pdo = new PDO($connectionString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // try to open database connection using constants set in config.php
     return $pdo;
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
  ;



   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      $username = stripslashes($username);
      $password = stripslashes($password);
      $username = mysql_real_escape_string($username);
      $password = mysql_real_escape_string($password);
      $sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
      $result=mysql_query($sql);

      // Mysql_num_row is counting table row
      $count=mysql_num_rows($result);

      // If result matched $username and $password, table row must be 1 row
      if($count == 1) {
         session_register("$username");
         $_SESSION['login_user'] = $username;

         header("location: indexLogged.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }
    }

?>
