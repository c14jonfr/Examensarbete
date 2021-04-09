<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Shared/style.css">
  <script src="../script.js" defer></script>
  <script src="../Shared/FormHandler.js" defer></script>
  <title>Document</title>
</head>
<body>
  <div class="container form-page">
  <h3>Important!</h3>
  <p>No data has been collected yet. Your participation is not over until this questionnaire is submitted.
  This means you can choose to stop your participation by not submitting this form. 
  Please answer the questionnaire as truthfully as possible. </p>
  <form name="form" method="post" id="form" action="./Thanks.php">
        <div>
            <label for="age">Age: </label>
            <select name="age" id="age" required>
              <option value="20-30">20-30</option>
              <option value="31-40">31-40</option>
              <option value="41-50">41-50</option>
              <option value="51-60">51-60</option>
              <option value="61-70">61-70</option>
              <option value="71 or older">71 or older</option>
            </select>
        </div>
        <div>
            <label for="gender">Gender: </label>
            <select name="gender" id="gender" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
        </div>
        <div>
            <label for="effort">How much effort did it take you to navigate with the menu and solve the tasks? </label>
            <div><div>Little effort</div><input type="range" name="effort" id="effort" min="0" max="10"><div>A lot of effort</div></div>  
        </div>
        <div>
            <label for="menu-annoyance">Did you find the graphical menu annoying?</label>
            <div><div>Not annoying</div><input type="range" name="menu-annoyance" id="menu-annoyance" min="0" max="10"><div>Annoying</div></div>  
        </div>
        <div>
            <label for="comments">Do you have any general comments about the application or the test? (Optional)</label>
            <div><textarea name="comments" id="comments" form="form"></textarea></div>
        </div>
        <div>
          <input type="hidden" name="taskTimes" id="taskTimes" value="">
        </div>
        <div style="text-align: center;">
          <input type="hidden" name="form_submitted" value="1" />
          <input type="submit" value="Submit">
        </div>
    </form>
  </div>
</body>
</html>