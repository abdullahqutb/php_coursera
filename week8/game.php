<?php

if (! isset($_GET['name']) || strlen($_GET['name']) < 1) {
    die('Name parameter missing');
}

if (isset($_POST['logout'])) {
    header('Location: index.php');
    return;
}

$names = array('Rock', 'Paper', 'Scissors');
$human = isset($_POST["human"]) ? $_POST['human']+0 : -1;
$computer = rand(0, 2);

function check($computer, $human)
{
    if ($human == $computer) {
        return "Tie";
    } elseif ($human == 1 and $computer == 0) {
        return "You Win";
    } elseif ($human == 2 and $computer == 1) {
        return "You Win";
    } elseif ($human == 0 and $computer == 2) {
        return "You Win";
    } elseif ($human == 2  and $computer == 0) {
        return "You Lose";
    } elseif ($human == 1  and $computer == 2) {
        return "You Lose";
    } elseif ($human == 0  and $computer == 1) {
        return "You Lose";
    }
    return false;
}

$result = check($computer, $human);

if (!isset($_GET['name'])) {
    die("Name parameter missing");
} else {
    if (isset($_POST['selectbox'])) {
        $human = $_POST['selectbox'];
        $computer = rand(0, 2);
        $result = check($computer, $human);
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sayed Abdullah Qutb - b56d9d8b - Rock, Paper, Scissors GAME</title>
  </head>
  <body>
    <h1>
      Rock, Paper, Scissors
    </h1>
    <h4>
      Welcome: <?= $_GET['name']; ?>
    </h4>
    <form method="post">
      <select name="selectbox">
        <option value="-1">Select</option>
        <option value="0">Rock</option>
        <option value="1">Paper</option>
        <option value="2">Scissor</option>
        <option value="test">Test</option>
      </select>
      <input type="submit" name="play" value="Play">
      <input type="submit"  name="logout" value="Logout">
    </form>
    <pre>
      <?php
          if (isset($_POST['play'])) {
              if ($_POST['selectbox'] == -1) {
                  print "Please select a strategy and press Play.\n";
              } elseif ($_POST['selectbox'] == 'test') {
                  for ($c=0;$c<3;$c++) {
                      for ($h=0;$h<3;$h++) {
                          $r = check($c, $h);
                          print "Human=$names[$h] Computer=$names[$c] Result=$r\n";
                      }
                  }
              } else {
                  print "Your Play=$names[$human] Computer Play=$names[$computer] Result=$result\n";
              }
          }
       ?>
    </pre>
  </body>
</html>
