<?php
$a=80;
$b=75;
$c=65;
$d=98;
$e=63;


if($a>=40 && $b>=40 && $c>=40 && $d>=40 && $e>=40)
{
  echo "Pass "; echo "<br>";
  $total=$a+$b+$c+$d+$e;
  echo" Total  " .$total; echo  "<br>";
  $percentage=$total/5;
  echo "Percentage: " .$Percentage ."%";
}
else 
{
  echo "fail";
}

?>