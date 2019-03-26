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
    $query="SELECT * FROM `members` WHERE email='$email' AND password='$password' ";
    if(mysqli_query($conn,$query))
    {
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['email'] = $email;
      header("location:index.php");

    }
    else
    {
        echo 'Error occured!!';
    }
    mysqli_close($conn);
};
?>
