<?php
  $file = "../Data/data.json";
  $strJsonFileContents = file_get_contents($file);
  $array = json_decode($strJsonFileContents, true);
  $A = 0;
  $B = 0;
  for ($x = 0; $x <= count($array); $x++) {
    if($array[$x]["application"] == "A") $A++;
    if($array[$x]["application"] == "B") $B++;
  }
  if($A <= $B){
    header("Location: /Examensarbete/A/");
  }else{
    header("Location: /Examensarbete/B/");
  }
?>