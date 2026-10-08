<?php
$totalorder = 400000 ;
$shippingfee = 20000 ;
$city = "jakarta" ;

if ($totalorder <= 0){
    echo "invalid order" ;
} 
elseif ($city === "jakarta" && $totalorder >= 500000){
    echo $totalorder . " + " . "Priority Delivery" ;
}
elseif ($totalorder >= 300000){
    echo $totalorder . " + " . "free Standard Delivery" ;
}
else{
   echo $totalorder . "Regular delivery shipping fee " .  $shippingfee;
}

?>