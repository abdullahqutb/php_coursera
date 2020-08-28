<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
      <?php
        // echo $var;
        foreach ($_POST as $key => $value) {
            if ($key != 'submit') {
                echo $key . "  =>>>  " . $value . "\n";
            }
        }
        // print_r($_POST);
      ?>
    </pre>
    <h3>Details</h3>
    <form class="" action="test.php" method="post">
      <p>
        <label for="email">Email: <input type="text" name="email" value="">
      </p>
      <p>
        <label for="password">Password: <input type="password" name="password" value="">
      </p>
      <p>
        <label for="name">Name: <input type="text" name="name" value=""> </label>
      </p>
      <p>
        Preferred Time <br>
        <input type="radio" name="radio" value="AM">AM <br>
        <input type="radio" name="radio" value="PM">PM
      </p>
      <p>
        Classes Taken <br>
        <input type="checkbox" name="chk1" value="CS201">CS201 <br>
        <input type="checkbox" name="chk2" value="CS202">CS202 <br>
        <input type="checkbox" name="chk3" value="CS203">CS203
      </p>
      <p>
        Which Drink <br>
        <select class="" name="selectbox">
          <option value="0">-- Select a drink --</option>
          <option value="cola">Cola</option>
          <option value="fanta">Fanta</option>
          <option value="sprite">Sprite</option>
        </select>
      </p>
      <p>
        Write something <br>
        <textarea name="textarea" rows="8" cols="80" maxlength="40"></textarea>
      </p>


      <p>
        <label for="submit"> <input type="submit" name="submit" value="SUBMIT"> </label>
      </p>
    </form>

  </body>
</html>
