<?php

$error = "";

if (isset($_POST['logout'])) {
    header('Location: index.php');
    exit;
}

if (!isset($_GET['name'])) {
    $error = "Name parameter missing";
    die("Name parameter missing");
} else {
    $username = $_GET['name'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rock, Paper, Scissors GAME</title>
  </head>
  <body>
    <div style="margin: 10px 20px 0 50px;">
      <h1 style="text-align: center; margin-bottom: 40px;">
        Rock, Paper, Scissors
      </h1>
      <h4>
        Welcome <?= $username ?>
      </h4>
      <form method="post" action="game.php">
        <select name="selectbox">
          <option value="0">Select</option>
          <option value="rock">Rock</option>
          <option value="paper">Paper</option>
          <option value="scissors">Scissors</option>
          <option value="test">Test</option>
        </select>
        <input type="button" name="play" value="Play">
        <input type="submit"  name="logout" value="Logout">
        <input type="submit"  name="submit" value="SUBMIT">

      </form>
      <p>
      <?= $error ?>
      </p>
    </div>
  </body>
</html>
