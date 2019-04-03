
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
      <a class="logo" href="index.php">COPY-Paste</a>



      <nav>
        <ul>
          <li><a href="About.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php" id="login">Login</a></li>
          <li><a href="Register.php">Sign Up</a></li>
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
      COPY-paste can easily copy a snippet of text – like a useful phone number or entire folders of files with equal ease. COPY-paste is flexible enough to handle it all - just copy it!
    </p>
    <h2>Wherever you go</h2>
    <p>Anything you COPY-paste is instantly accessible on all your devices. Wherever you are – in the office or on the go. All your stuff is stored forever ready for you to retrieve when you need it most.
    </p>

      <?php
      ini_set('display_errors', 1);
      error_reporting(E_ALL);
      require 'database.php';
      require 'functions_template.php';
      global $pdo;
      $pdo=db_connect();

      session_start();

      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo "<h3>Welcome , " .$_SESSION['email']. "!</h3>";
          $copiedText='';


           $queryCopy="SELECT * FROM members WHERE email='".$_SESSION['email']."' ";

           $resultExist = $pdo->query($queryCopy);
           $text = Array();
           while($row = $resultExist->fetch()){
           array_push($text,$row);
            foreach($text as $copy){
                  $copiedText = $copy[3];
                }

          }



        echo "<script> var x='' ; var x='".$copiedText."' ; setInterval(function() { document.getElementById('paste').innerHTML=x;}, 100);";



         echo  "</script>";

       }

     else {
          echo "Please log in first to see this page.";
      };

  if($_SERVER["REQUEST_METHOD"] == "POST")
      {
        $copiedText=$_POST['textCopy'];
        if ($_SESSION['loggedin'] == true){

          $query="UPDATE `members` SET `copy` = '".$copiedText."' WHERE `email`= '".$_SESSION['email']."';" ;




          echo"<br>";
          $statement= $pdo->prepare($query);

         if ($statement->execute()) {


              echo "The Text that is Copied is--- ".$copiedText ;
          }
         else {
            echo "Not worked";
          }


        }
      }

      //connect to database: PHP Data object representing Database connection

       ?>
    <div id="form1">
      <form name="form" method="post" action="index.php" >
        <h4>Type the Text you want to paste</h4>

        <textarea type="text" name="textCopy" rows="6" cols="40"></textarea>
        <br>
        <input type="submit" value="submit" name="submit" />
        <h4>Type the text you pasted</h4>
        <h5 id="paste" ></h4>
      </form>

    </div>

    <a href=" Register.php">
      <div class="signUp">
        <!-- add aria -->
        Sign Up
      </div>
    </a>
    <a href=" login.php">
      <div class="signUp">
        <!-- add aria -->
        Log In
      </div>
    </a>
  </div>



  </div>
  <footer>
    <p>Made by: Sidharth Nayyar</p>
    <p>Contact information: <a href="mailto:sidharth15nayyar.com">sidharth15nayyar.com</a>.</p>
  </footer>
</body>

</html>
