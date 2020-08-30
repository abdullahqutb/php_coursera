<?php


$error = "";
$username = "";
$password = "";
$user = "abu";
// $pass = "123";

$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';

$md5 = hash('md5', 'XyZzy12*_php123');

if (isset($_POST['logout'])) {
    $error = "Logged out successfully, please log in again!";
} elseif (isset($_POST['who']) && isset($_POST['pass'])) {
    $username = $_POST['who'];
    $password = $_POST['pass'];
    $temp = $salt.$password;
    $try = hash('md5', $temp);
    if ($stored_hash == $try) {
        echo "YESSSS" . "\n";
        header("Location: game.php?name=".urlencode($_POST['who']));
    } else {
        $error = "Incorrect Password";
    }
} else {
    if (!isset($_POST['who']) && count($_POST) > 1) {
        $error = "Email cannot be empty!";
    } elseif (isset($_POST['pass']) && count($_POST) > 1) {
        $error = "Password cannot be empty";
    }
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sayed Abdullah Qutb - b56d9d8b - Rock, Paper, Scissors LOGIN PAGE</title>
   </head>
   <body>
     <div>
       <h1>Please Log In</h1>
       <form action="login.php" method="post">
         <h3 style="color: red;"><?= $error ?></h3>
         <p>
           Username:
           <input type="text" name="who" value="" required>
         </p>
         <p>
           Password:
           <input type="password" name="pass" value="" required>
         </p>
         <input type="submit" name="login" value="Log In">
       </form>
     </div>
   </body>
 </html>
