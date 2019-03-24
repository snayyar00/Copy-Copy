
<!DOCTYPE html>
<html lang="en" dir="ltr">

<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
<link href='style.css' rel='stylesheet' type='text/css'>
<link href='icomoon/style.css' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="main.js"></script>
<header class="stickyNav">
  <a href="#top" class="icon-circle-up"></span>
    <div class="row">
      <a class="logo" href="index.html">COPY-Paste</a>



      <nav>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#" id="login" onclick="popUp()">Login</a></li>
          <li><a href="#">Sign Up</a></li>
        </ul>
      </nav>

    </div> <!-- / row -->

</header>
<body>

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

  <div id="form1">
    <form name="form" method="post" action="index.php?action=check">
      <h4>Type the Text you want to paste</h4>

      <textarea type="text" name="text" rows="4" cols="50"></textarea>
      <br>
      <input type="submit" value="Submit" name="Submit" />
    </form>

  </div>
  <div class="signUp">
    <!-- add aria -->
    Sign Up
  </div>
  <div id="modal-wrapper" class="modal">

    <form class="modal-content animate" action="/action_page.php">

      <div class="imgcontainer">
        <span onclick="popUpClose()" class="close" title="Close PopUp">&times;</span>
        <img src="1.png" alt="Avatar" class="avatar">
        <h1></h1>
      </div>

      <div class="container">
        <input type="text" placeholder="Enter Username" name="uname">
        <input type="password" placeholder="Enter Password" name="psw">
        <button type="submit">Login</button>
        <input type="checkbox"> Remember me<br>
        <a href="#">Forgot Password ?</a>
      </div>

    </form>

  </div>

</div>
</body>

</html>
<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
