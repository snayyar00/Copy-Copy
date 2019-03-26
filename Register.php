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
