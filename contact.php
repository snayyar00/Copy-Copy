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
<script src="main.js"></script>
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
<div id="Sign-Up">
  <form  method="POST" action="contact.php" >
    <div class="container">
      <h1>Contact</h1>
      <p>Thanks For Contacting us.</p>
      <br>
      <div>
            <label for="name" ><b>Name</b></label>
            <input type="text" id="name" placeholder="Enter Name" name="name"  >
      </div>
<div>
      <label for="email" ><b>Email</b></label>
      <input type="email" id="email" placeholder="Enter Email" name="email" required data-validation="email" >
</div>


  <div>
    <br>
    <label><b>Your message goes here</b></label><br>
    <textarea value="Your message goes here" rows="6" cols="40" name='text'></textarea>
  </div>



      <input type="submit" name="sumbit" value="Send">
  </div>
  </div>
  </form>
</div>
</body>
</html>
