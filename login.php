<?php
require_once 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $pdo = db_connect();
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $email = stripslashes($email);
    $password = stripslashes($password);
    $email = mysql_real_escape_string($email);
    $password = mysql_real_escape_string($password);

    //Validation if user exists
  $query="SELECT * FROM `members` WHERE email='$email' AND password='$password' ";
  $resultExist = $pdo->query($query);
  if(isset($resultExist)){
    echo "<script>alert('".$email."Logged in ')</script>";
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['password']=$password;


  }
    else
    {
        echo "<script>alert('".$email." User doesnot exist')</script>";
    };

  };

?>
<html>
<head>
<title>Log In</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<link href="styleLog.css" type="text/css" rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="main.js"></script>
  <script type="text/javascript">
     $(document).ready(function(){
         // WILL PREVENT FORM FROM SENDING IF THERE ARE ERRORS (comment this out to test PHP validation.)
       $.validate();
       });
    </script>
    <style>

    </style>
</head>
<body >
  <header class="stickyNav sticky">
  <span>  <a href="#top" class="icon-circle-up"></span>
      <div class="row">
        <a class="logo" href="index.php">COPY-Paste</a>



        <nav>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="login.php" id="login" onclick="popUp()">Login</a></li>
            <li><a href="Register.php">Sign Up</a></li>
          </ul>
        </nav>

      </div> <!-- / row -->

  </header>
<div id="Sign-Up">
  <form  method="POST" action="login.php" >
    <div class="container">
      <h1>Log in</h1>
      <p>Enter your credentials.                   </p>
      <hr>
<div>
      <label for="email" ><b>Email</b></label>
      <input type="email" id="email" placeholder="Enter Email" name="email" required data-validation="email" >
</div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password"  required>


<div>
      <label>
        <input type="checkbox" checked="checked" name="remember" > Remember me
      </label>
</div>


      <input type="submit" name="sumbit" value="Log in">
  </div>

  </form>
</div>
</body>
</html>
