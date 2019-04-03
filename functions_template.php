<?php

require_once 'config.php';

$copiedText='';
function copyText($resultExist) {

  $text = Array();
  while($row = $resultExist->fetch()){
  array_push($text,$row);
  foreach($text as $copy)
  $copiedText = $copy[3];
  return $copiedText;
  }

}
