
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head
<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
<link href='style.css' rel='stylesheet' type='text/css'>
<link href='icomoon/style.css' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="main.js"></script>
</head>
<body>
<header class="stickyNav">
  <a href="#top" class="icon-circle-up"></span>
    <div class="row">
      <a class="logo" href="index.html">COPY-Paste</a>



      <nav>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="login.html" id="login">Login</a></li>
          <li><a href="Register.html">Sign Up</a></li>
        </ul>
      </nav>

    </div>

</header>



  <div class="hero">

    <h1><span>COPY-Paste</span><br>COPY it anywhere , paste it anywhere</h1>



  </div>

  <div class="content" id="top">
    <h2>Instantly everywhere</h2>
    <p>
      Just copy anything and you can instantly paste, or view, on any of your devices. COPY-paste is seamless, fast and works everywhere.
    </p>
    <h2>All your data – big or small</h2>
    <p>
      CopyCopy can easily copy a snippet of text – like a useful phone number or entire folders of files with equal ease. CopyCopy is flexible enough to handle it all - just copy it!
    </p>
    <h2>Wherever you go</h2>
    <p>Anything you copycopy is instantly accessible on all your devices. Wherever you are – in the office or on the go. All your stuff is stored forever ready for you to retrieve when you need it most.
    </p>
    <h2>Any app, any device</h2>
    <p>We integrate with all your phones and computers - so anything you copy from any app is instantly available everywhere with the power of CopyCopy. CopyCopy works on Android, iOS, Blackberry*, Windows, Mac, Chrome and Firefox with support for
      other platforms arriving soon!</p>
<?php
require 'login.php';
global  $email;
global  $password;
global $conn;


session_start();
if ($_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " .$_SESSION['email'] = $email. "!";
} else {
    echo "Please log in first to see this page.";
}

if($_POST){
  $copiedText=$_POST['textCopy'];
  if ($_SESSION['loggedin'] == true){
    $query="UPDATE  `members` SET `copy`=$copiedText where email='$email' AND password= '$password' ";
    if(mysqli_query($conn,$query))
    {
        echo $email.' User Successfully Registered!!';
         header("location: index.html");

    }
  }
}
 ?>
    <div id="form1">
      <form name="form" method="post" >
        <h4>Type the Text you want to paste</h4>

        <textarea type="text" name="textCopy" rows="4" cols="40"></textarea>
        <br>
        <input type="submit" value="Submit" name="Submit" />
      </form>

    </div>
    <a href=" Register.php">
      <div class="signUp">
        <!-- add aria -->
        Sign Up
      </div>
    </a>
  </div>
  <a href=" login.php">
    <div class="signUp">
      <!-- add aria -->
      Log In
    </div>
  </a>


  </div>
  <footer>
    <p>Made by: Sidharth Nayyar</p>
    <p>Contact information: <a href="mailto:sidharth15nayyar.com">sidharth15nayyar.com</a>.</p>
  </footer>
</body>

</html>
