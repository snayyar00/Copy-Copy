<?php
if($_POST)
{
    $conn=mysqli_connect('localhost','root','','CopyPaste');

    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query="INSERT INTO `members` ( `email`, `password`, `copy`) VALUES ( '$email', '$password', ' ')";
    if(mysqli_query($conn,$query))
    {
        echo $email.' User Successfully Registered!!';
         header("location: index.html");

    }
    else
    {
        echo 'Error occured!!';
    };
    mysqli_close($conn);
};
?>
<html>
<head>
<title>Sign-Up</title>
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
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
<div>
      <label for="email" ><b>Email</b></label>
      <input type="email" id="email" placeholder="Enter Email" name="email" required data-validation="email" >
</div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password"  required>

<div>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" requied>
      </div>
<div>
      <label>
        <input type="checkbox" checked="checked" name="remember" > Remember me
      </label>
</div>
      <p>By creating an account you agree to our <a href="#" >Terms & Privacy</a>.</p>

      <input type="submit" name="sumbit" value="Sign Up">
  </div>
  </div>
  </form>
</div>
</body>
</html>
