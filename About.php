<?php
include 'database.php';
$email;
$password;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $pdo = db_connect();
    $name=$_POST['name'];
    $email=$_POST['email'];
    $text=$_POST['text'];
      $query="INSERT INTO `contact` ( `email`, `name`, `message`) VALUES ( '$name', '$email', '$text')";
  $result = $pdo->query($query);
  if(isset($result))
    {
        echo "<script>alert('".$email." Message is Sent thanks for contacting!!')</script>";


    }
    else
    {
        echo "<script>alert('".$email." Oops your message couldnot be delivered')</script>";
    };

  };
?>

<html>
<head>
<title>Contact</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<link href="styleLog.css"  rel="stylesheet" type="text/css">
<!-- <script src="main.js"></script> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript">
     $(document).ready(function(){
         // WILL PREVENT FORM FROM SENDING IF THERE ARE ERRORS (comment this out to test PHP validation.)
       $.validate();
       });
    </script>

</head>
<body >
  <header class="stickyNav sticky">
    <span><a href="#top" class="icon-circle-up"></span>
      <div class="row">
        <a class="logo" href="index.php">COPY-Paste</a>



        <nav>
          <ul>
            <li><a href="about.php">About</a></li>
            <li><a href="document.php">Documentation</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php" id="login">Login</a></li>
              <li><a href="Register.php">Sign Up</a></li>
          </ul>
        </nav>

      </div> <!-- / row -->

  </header>
<div id="wrapper">
  <h1>About Me</h1>
  <div class="imageContainer">
  <img src="about.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Sidharth Nayyar</div>
  </div>
</div>
<h1>Hobbies</h1>
<main class="grid">
  <img src="images/1.jpg" alt="Sample photo"  class="zoom">
 <img  src="images/2.jpg"  alt="Sample photo"  class="zoom">   <!--https://unsplash.com/photos/0v_uwdx2f58 -->
  <img src="images/3.jpg" alt="Sample photo"  class="zoom">
  <img src="images/4.jpg" alt="Sample photo"  class="zoom">
  <img src="images/5.jpg" alt="Sample photo"  class="zoom">
  <img src="images/6.jpg" alt="Sample photo"  class="zoom">
  <img src="images/7.jpg" alt="Sample photo"  class="zoom">
  <img src="images/8.jpg" alt="Sample photo"  class="zoom">
  <img src="images/9.jpg" alt="Sample photo"  class="zoom">
  <img src="images/10.jpg" alt="Sample photo" class="zoom">
  <img src="images/11.jpg" alt="Sample photo" class="zoom">
  <img src="images/12.jpg" alt="Sample photo" class="zoom">


</main>
</div>
</body>
</html>
