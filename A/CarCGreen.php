<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Shared/style.css">
  <script src="./AudioHandler.js" defer></script>
  <script src="../Shared/TaskHandler.js" defer></script>
  <title>Car Company C Green</title>
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
    <main>
      <div class="product">
        <img src="../Shared/Images/CarGreen.jpg" alt="productimage car company C green">
        <h3 class="product-name">Green Car</h3>
        <h4 class="product-company">Company C</h4>
        <div class="buttons">
          <button class="buy-button">Buy</button>
          <button class="share-button">Recommend to a friend</button>
        </div>
        <p class="product-description">
          A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions of cars say that they run primarily on roads, seat one to eight people, have four wheels, and mainly transport people rather than goods.
          Cars came into global use during the 20th century, and developed economies depend on them. The year 1886 is regarded as the birth year of the modern car when German inventor Karl Benz patented his Benz Patent-Motorwagen. Cars became widely available in the early 20th century. One of the first cars accessible to the masses was the 1908 Model T, an American car manufactured by the Ford Motor Company.
        </p>
      </div> 
    </main>
  </div>
</body>
</html>