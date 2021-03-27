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
  <div class="instructions" id="instructions">
    <div class="instruction-div">
      <p id="instruction-p">here goes instruction/task text</p>
      <button id="start-button">Start task</button>
    </div>
  </div>
  <audio src="" id="audio-element" loop></audio>
  <div class="container">
    <?php include '../Shared/nav-menu.php'?>
  </div>
</body>
</html>