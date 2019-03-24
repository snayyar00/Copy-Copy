
<?php

require_once 'config.php';


  try {

    $connectionString = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
    $user=DBUSER;
    $pass=DBPASS;
    $pdo = new PDO($connectionString,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
     return $pdo;
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  };

$userName = $_POST['username'];
$password =  $_POST['password'];
$query = "INSERT INTO members (username,password) VALUES ('$userName','$password')";
$data = mysql_query($query)or die(mysql_error());
if($data)
{
echo "YOUR REGISTRATION IS COMPLETED...";
}
else
{
echo "Unknown Error!";
};
?>
