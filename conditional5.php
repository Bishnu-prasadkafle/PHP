<?php
$sp=50000;
$cp=40000;
if($sp>$cp){
  $profit=$sp-$cp;
  echo "profit " .$profit;
}
else if($cp>$sp)
{
  $loss=$cp-$sp;
  echo "loss " .$loss;
}
else{
  echo "neutral";
}




?>