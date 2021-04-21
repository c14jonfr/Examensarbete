<?php
  $file = "../../Data/data.json";
  $strJsonFileContents = file_get_contents($file);
  $array = json_decode($strJsonFileContents, true);
  if(isset($_POST['form_submitted'])) {
    $arr = array(
        'id'      => count($array),
        'application' => 'B',
        'age'     => $_POST['age'],
        'gender'    => $_POST['gender'],
        'difficulty'    => $_POST['difficulty'],
        'menu-annoyance'    => $_POST['menu-annoyance'],
        'comments'        => $_POST['comments'],
        'taskTimes' => json_decode($_POST['taskTimes'])
    );
    $array[] = $arr;
    $json_string = json_encode($array);
    file_put_contents($file, $json_string);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Shared/style.css">
  <title>Document</title>
</head>
<body>
  <?php include '../Shared/thank-you.php'?>
</body>
</html>