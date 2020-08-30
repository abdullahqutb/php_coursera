<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guessing game</title>
  </head>
  <body>
    <?php
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $guess = isset($_POST['guess']) ? $_POST['guess'] : "";
    $message = "";

    if (strlen($guess) <= 0) {
        $message = "You did not try!";
    } elseif (is_numeric($guess) == false) {
        $message = "Guess aa number";
    } else {
        if ($guess > 42) {
            $message = "Guess too high!";
        } elseif ($guess < 42) {
            $message = "Guess too low";
        } else {
            $message = "Congrats, you got it right";
        }
    }
     ?>

     <h2 style="text-align: center; margin-bottom: 50px;">Welcome to the guessing game</h2>
     <form action="guess.php" method="post" style="text-align: center;">
       <p>
         Name:
         <input type="text" name="name" value="<?= htmlentities($name) ?>">
       </p>
       <p>
         Guess:
         <input type="text" name="guess" value="<?= htmlentities($guess) ?>">
       </p>
       <p>
         <input type="submit" name="submit" value="SUBMIT">
       </p>
     </form>
     <h3 style="margin-top: 20px; text-align: center;"><?= $message ?></h3>
  </body>
</html>
