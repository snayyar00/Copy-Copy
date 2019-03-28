
<?php
include 'login.php';



session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . "!";
    echo $email;
} else {
    echo "Please log in first to see this page.";
}
echo "<script>alert('notyo')</script>";
if(isset($_POST['submit'])){
  $copiedText=$_POST['textCopy'];
  echo "<script>alert('yo')</script>";
  if ($_SESSION['loggedin'] == true){
    $query="UPDATE `members` SET `copy` = ' $copiedText' WHERE `members`.`email`=" .$_SESSION['email']. " ";
    if(mysqli_query($conn,$query))
    {
        echo $email.' User Successfully Registered!!';
         header("location: login.html");

    }
  }
}
 ?>
