<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP Lesson 3: Conditional Logic & Functions</title>
</head>
    <body>
        <h1>PHP Lessons</h1>
        <h2>Three: Conditional Logic & Functions</h2>
    <p>
      <?php
        $num1 = 100;

        if ($num1 > 50) { //true
          echo "The number is larger than 50.";
        }
      ?>
    </p>
    <p>
      <?php
        $num1 = 200;
        $num2 = 200;

        if ($num1 < $num2) {
          echo "The number one variable is smaller.";
        } else {
          echo "The number one variable is larger.";
        }
      ?>
    </p>

    <p>
      <?php
      if ($num1 < $num2) {
        echo "The number one variable is smaller.";
      } elseif ($num1 > $num2) {
        echo "The number one variable is larger.";
      } else {
        echo "They are the same number";
      }
      ?>
    </p>
    <h3>Loops</h3>
    <p>For Loop:
      <?php
      for($num = 1; $num < 25; $num = $num + 2) {
        echo $num . " ";
      }
      ?>
    </p>
    <p>Foreach Loop: </p>
    <ul>
      <?php
      $dogs = array("Golden", "Dachshund", "Corgi", "Shetland Sheepdog", "Mutt");

      foreach ($dogs as $var) {
        echo "<li>" . $var . "</li>";
      }
      unset($var);
      ?>
    </ul>

    <p>While Loops:<br />
      <?php
      $x = 1;

      while ($x <= 10) {
        echo "X equals: " . $x . "<br />";
        $x++;
      }
      ?>
    </p>

    <h3>Functions</h3>
    <?php
    $string1 = "Web Interactivty and Engagement";
    ?>
    <p>String Value: <?php echo $string1; ?></p>
    <p>String Length:
      <?php
      $stringlength = strlen($string1);
      print $stringlength;
      ?>
    </p>

    <p>Lowercase string:
      <?php
      $lowercase = strtolower($string1);
      print $lowercase;
      ?>
    </p>

    <p>Uppercase string:
      <?php
      $uppercase = strtoupper($string1);
      print $uppercase;
      ?>
    </p>

    <p>First Letters of the String:
      <?php
      $characterlimit = substr($string1, 0, 7);
      print $characterlimit;
      ?>
    </p>

    <p>P in Elephant?<br/>
      <?php
      $positionP = strpos("Elephant", "p");
      print $positionP;
      ?>
    </p>

    <p>Q in Elephant?<br/>
      <?php
      $positionQ = strpos("Elephant", "q");
      print $positionQ;
      ?>
    </p>
    <hr />

    <p>Is there a 'p' in Elephant?
      <?php
      $elephant = "Elephant";
      $positionP = strpos("Elephant", "p");
      if ($positionP) {
        echo "Yes";
      } else {
        echo "No";
      }
      ?>
    </p>

    <p>Is there a 'q' in Elephant?
      <?php
      $elephant = "Elephant";
      $positionQ = strpos("Elephant", "q");
      if ($positionQ) { //truthful?
        echo "Yes";
      } else { //otherwise...
        echo "No";
      }
      ?>
    </p>

    <p>Random Number:
      <?php
      print rand(1, 1000);
      ?>
    </p>

      <?php $dogs2 = array("Mixed Breed", "Labrador"); ?>
    <p>List of Dogs (pre):<br/>
      <?php
      print_r($dogs2);
      ?>
      <?php
      array_push($dogs2, "Pitbull");
      array_push($dogs2, "Corgi");
      array_push($dogs2, "Shetland Sheepdog");
      array_push($dogs2, "Schnauzer");
      array_push($dogs2, "Golden Retriever");
      ?>
    </p>

    <p>List of Dogs (pre):<br/>
      <?php
      print_r($dogs2);
      ?>
    </p>

</html>
