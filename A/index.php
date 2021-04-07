<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Shared/style.css">
  <script src="./AudioHandler.js" defer></script>
  <script src="../Shared/TaskHandler.js" defer></script>
  <title>Document</title>
</head>
<body>
  <?php include '../Shared/introduction.php'?>
  <?php include '../Shared/instructions.php'?>
  <audio src="" id="audio-element" loop></audio>
  <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <filter id="blur">
      <feGaussianBlur in="SourceGraphic" stdDeviation="1" />
    </filter>
  </svg>
  <div id="visual-impairment-simulator" class="vis-container diabetic-retinopathy"></div>
  <div class="container blur-filter">
    <?php include '../Shared/nav-menu.php'?>
  </div>
</body>
</html>