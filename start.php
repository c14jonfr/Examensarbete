<?php
  $file = "../Data/data.json";
  $strJsonFileContents = file_get_contents($file);
  $array = json_decode($strJsonFileContents, true);
  if(count($array) % 2 == 0){
    header("Location: /Examensarbete/A/");
  }else{
    header("Location: /Examensarbete/B/");
  }
?>