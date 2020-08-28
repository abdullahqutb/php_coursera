<!DOCTYPE html>
<head><title>Sayed Abdullah Qutb MD5 Cracker</title></head>
<body>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash
of a four-digit PIN and
attempts to hash all four-digit combinations
to determine the original four-digit PIN</p>
<pre>
<?php
$goodtext = "Not found";
// If there is no parameter, this code is all skipped
if (isset($_GET['md5'])) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    // This is our alphabet
    $txt = "1234567890";
    $show = 15;

    // Outer loop go go through the alphabet for the
    // first position in our "possible" pre-hash
    // text
    for ($i=0; $i<strlen($txt); $i++) {
        $ch1 = $txt[$i];   // The first of two characters

        // Our inner loop Not the use of new variables
        // $j and $ch2
        for ($j=0; $j<strlen($txt); $j++) {
            $ch2 = $txt[$j];  // Our second character

            for ($k = 0; $k < strlen($txt); $k++) {
                $ch3 = $txt[$k];

                for ($l = 0; $l < strlen($txt); $l++) {
                    $ch4 = $txt[$l];

                    // Concatenate the two characters together to
                    // form the "possible" pre-hash text
                    $try = $ch1.$ch2.$ch3.$ch4;

                    // Run the hash and then check to see if we match
                    $check = hash('md5', $try);
                    if ($check == $md5) {
                        echo "FOUND" . "\n";
                        $goodtext = $try;
                        break;   // Exit the inner loop
                    }

                    // Debug output until $show hits 0
                    if ($show > 0) {
                        print "$check $try\n";
                        $show = $show - 1;
                    }
                }
            }
        }
    }
    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<!-- Use the very short syntax and call htmlentities() -->
<p>Original Text: <?= htmlentities($goodtext); ?></p>
<form method="GET">
<input type="text" name="md5" size="40" />
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index.php">Reset</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
<!-- <li><a href="makecode.php">MD5 Code Maker</a></li> -->
<li><a
href="https://github.com/csev/wa4e/tree/master/code/crack"
target="_blank">Source code for this application</a></li>
</ul>
<form class="" method="POST">
  <p>
    <label>Email:</label>
    <input type="email" name="email" value="">
  </p>
  <input type="radio" name="radio" value="RADIO" checked>RADIO 1<br>
  <input type="radio" name="radio" value="RADIO1">RADIO 2<br>
  <input type="search" name="search" value="SEARCH"><br>
  <input type="submit" name="submit" value="SUBMIT"><br>
  <input type="checkbox" name="chk1" value="CHK 1">CHECK 1<br>
  <input type="checkbox" name="chk2" checked>CHECK 2<br>
  <select class="" name="select">
    <option value="0">-- Please Select --</option>
    <option value="option 1" disabled>OPTION 1</option>
    <option value="option 1">OPTION 1</option>
  </select><br> <br>
  <label for="textarea">HERE <br>
    <textarea name="textarea" rows="8" cols="80" lang="fa"></textarea> <br>
  <select multiple name="multiple[]">
    <option value="one">ONE</option>
    <option value="two">TWO</option>
    <option value="three">THREE</option>
  </select>
  <p>
    <input type="submit" name="submit" value="SUBMIT2"> <br>
    <input type="button" name="button" value="NOTHING" onclick="location.href='https://google.com'; return false;">
  </p>

</form>
<pre>
  <?php
  if (isset($_POST)) {
      print_r($_POST);
  }
  ?>
</pre>
</body>
</html>
