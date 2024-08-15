<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operator</title>
</head>
<body>
  <h2>Operator</h2>
  <?php
  $a=10;
  $b=5;
  echo $sum=$a+$b;


  ?>
  <h2>By  form</h2>
  <form action="" method="post">
    <input type="text" name="num1" id="num1" placeholder="First number">
    <input type="text" name="num2" id="num2" placeholder="second number">
    <br>
    <button type="Submit" name="submit">Add Number</button>
  </form>

  <?php
  if(isset($_POST['submit']))
  {
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    echo $sum = $a + $b;
  }
  ?>
</body>
</html>