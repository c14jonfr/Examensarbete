<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Shared/style.css">
  <script src="./AudioHandler.js" defer></script>
  <script src="../Shared/TaskHandler.js" defer></script>
  <title>Plane Bob's Red</title>
</head>
<body>
  <?php include '../Shared/instructions.php'?>
  <audio src="" id="audio-element" loop></audio>
  <?php include '../Shared/visual-impairment-simulator.php'?>
  <div class="container blur-filter">
    <?php include '../Shared/nav-menu.php'?>
    <main>
      <div class="product">
        <img src="../Shared/Images/PlaneRed.jpg" alt="productimage plane Bob's red">
        <h3 class="product-name">Red Plane</h3>
        <h4 class="product-company">Bob's</h4>
        <div class="buttons">
          <button class="buy-button solution" data-solution="7">Buy</button>
          <button class="share-button">Recommend to a friend</button>
        </div>
        <p class="product-description">
          An airplane or aeroplane (informally plane) is a fixed-wing aircraft that is propelled forward by thrust from a jet engine, propeller, or rocket engine. Airplanes come in a variety of sizes, shapes, and wing configurations. The broad spectrum of uses for airplanes includes recreation, transportation of goods and people, military, and research. Worldwide, commercial aviation transports more than four billion passengers annually on airliners and transports more than 200 billion tonne-kilometers of cargo annually, which is less than 1% of the world's cargo movement.
        </p>
      </div>  
    </main>
  </>
</body>
</html>