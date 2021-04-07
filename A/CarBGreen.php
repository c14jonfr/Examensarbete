<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Shared/style.css">
  <script src="./AudioHandler.js" defer></script>
  <script src="../Shared/TaskHandler.js" defer></script>
  <title>Car Company B Green</title>
</head>
<body>
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
    <main>
      <div class="product">
        <img src="../Shared/Images/CarGreen.jpg" alt="productimage car company B green">
        <h3 class="product-name">Green Car</h3>
        <h4 class="product-company">Company B</h4>
        <div class="buttons">
          <button class="buy-button solution" data-solution="0">Buy</button>
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