<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>operator</title>
  
  
</head>
<center>
<body style="background-color:grey; align-items:center; justify-content:center;">
  <div class="box" style="border:2px solid red; height:fit-content; width:500px; padding:10px; border-radius:10px; background-color:white;">
  <h2>Operator</h2>
  <?php
  $l=5;
  $b=6;
  echo $area=$l*$b;
  ?>

  <form action="" method="post">
    <label for=len"><b>Length:</b></label><br>
    <input type="text" name="len" id="len" placeholder="enter length">
    <br><br>
    <label for="width"><b>Width:</b></label><br>
    <input type="text" name="width" id="width" placeholder="enter width">
    <br><br>

    <button type="submit" name="submit">Submit</button>

  </form>
  <?php
  if(isset($_POST['submit']))
  {
    $l=$_POST['len'];
    $b=$_POST['width'];
    echo $area=$l*$b;
  }
  ?>
  </div>
  </center>
  
</body>
</html>