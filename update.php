<?php
require 'database.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST["name"];
$pdo=db_connect();
 $copiedText='';

$queryCopy="SELECT * FROM members WHERE email='".$name."' ";

$resultExist = $pdo->query($queryCopy);
$text = Array();
while($row = $resultExist->fetch()){
array_push($text,$row);
 foreach($text as $copy){
       $copiedText = $copy[3];
     }

}
echo $copiedText;
echo $name;
}
?>
