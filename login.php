<?php
if($_POST)
{
    $conn=mysqli_connect('localhost','root','','CopyPaste');

    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $email = stripslashes($email);
    $password = stripslashes($password);
    $email = mysql_real_escape_string($email);
    $password = mysql_real_escape_string($password);
    $sql="SELECT * FROM members WHERE username='$email' and password='$password'";
    $result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
}
    mysqli_close($conn);
};
?>
<html>
<head>
<title>Log In</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<link href="styleLog.css" type="text/css">
  <script type="text/javascript">
     $(document).ready(function(){
         // WILL PREVENT FORM FROM SENDING IF THERE ARE ERRORS (comment this out to test PHP validation.)
       $.validate();
       });
    </script>
    <style>
    <?php include 'styleLog.css'; ?>
    </style>
</head>
<body >
  <header class="stickyNav sticky">
    <a href="#top" class="icon-circle-up"></span>
      <div class="row">
        <a class="logo" href="index.html">COPY-Paste</a>



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
  <form  method="POST" action="register.php" >
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


      <input type="submit" name="sumbit" value="Sign Up">
  </div>
  </div>
  </form>
</div>
</body>
</html>
