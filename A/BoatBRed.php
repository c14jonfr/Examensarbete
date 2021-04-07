<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Shared/style.css">
  <script src="./AudioHandler.js" defer></script>
  <script src="../Shared/TaskHandler.js" defer></script>
  <title>Boat Company B Red</title>
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
        <img src="../Shared/Images/BoatRed.jpg" alt="productimage boat company B red">
        <h3 class="product-name">Red Boat</h3>
        <h4 class="product-company">Company B</h4>
        <div class="buttons">
          <button class="buy-button">Buy</button>
          <button class="share-button">Recommend to a friend</button>
        </div>
        <p class="product-description">
        A boat is a watercraft of a large range of types and sizes, but generally smaller than a ship, which is distinguished by its larger size, shape, cargo or passenger capacity, or its ability to carry boats.
        Small boats are typically found on inland waterways such as rivers and lakes, or in protected coastal areas. However, some boats, such as the whaleboat, were intended for use in an offshore environment. In modern naval terms, a boat is a vessel small enough to be carried aboard a ship. Anomalous definitions exist, as lake freighters 1,000 feet (300 m) long on the Great Lakes are called "boats".
        </p>
      </div> 
    </main>
  </div>
</body>
</html>