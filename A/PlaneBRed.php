<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Shared/style.css">
  <script src="./AudioHandler.js" defer></script>
  <script src="../Shared/TaskHandler.js" defer></script>
  <title>Plane Company B Red</title>
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
        <img src="../Shared/Images/PlaneRed.jpg" alt="productimage plane company B red">
        <h3 class="product-name">Red Plane</h3>
        <h4 class="product-company">Company B</h4>
        <div class="buttons">
          <button class="buy-button">Buy</button>
          <button class="share-button">Recommend to a friend</button>
        </div>
        <p class="product-description">
          An airplane or aeroplane (informally plane) is a fixed-wing aircraft that is propelled forward by thrust from a jet engine, propeller, or rocket engine. Airplanes come in a variety of sizes, shapes, and wing configurations. The broad spectrum of uses for airplanes includes recreation, transportation of goods and people, military, and research. Worldwide, commercial aviation transports more than four billion passengers annually on airliners and transports more than 200 billion tonne-kilometers of cargo annually, which is less than 1% of the world's cargo movement.
        </p>
      </div>
    </main>
  </div>
</body>
</html>