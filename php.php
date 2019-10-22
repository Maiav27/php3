<?php
$valor = $_GET["v"];
$res= 1;
for($c = 1; $c <= $valor; $c++  ){
  
$res = $res * $c;
    
}
 echo $res;
?>