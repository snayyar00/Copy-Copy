
<!DOCTYPE html>
<html>
<head>
<title>About</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<link href="styleLog.css"  rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="main.js"></script>
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
            <li><a href="About.php">About</a></li>
            <li><a href="conatct.php">Contact</a></li>
            <li><a href="login.php" id="login" onclick="popUp()">Login</a></li>
            <li><a href="Register.php">Sign Up</a></li>
          </ul>
        </nav>

      </div> <!-- / row -->

  </header>
<div id="wrapper">
  <h3>About Me</h3>
<img src="about.jpg" alt="Creator Photo">
<div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</div>
</body>
</html>
