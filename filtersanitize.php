<?php 
// sanitize use to clear input not validate it 
// 1 - Email =>
$email = 'abdallahaljehani     @gmail.com' ; 
var_dump(filter_var($email , FILTER_SANITIZE_EMAIL)) ;  
echo '<br>' ; 
// 2- integer number 
$int = "100^*&*^&*^*^*990970" ; 
var_dump(filter_var($int , FILTER_SANITIZE_NUMBER_INT)) ; 
echo '<br>' ; 
// 3- float number 
$float = '10,320,430.5400' ; 
var_dump(filter_var($float , FILTER_SANITIZE_NUMBER_FLOAT , ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION ])) ;// one for , and the other for .
echo '<br>' ; 
$url = 'https//libya.com' ; 
var_dump(filter_var($url , FILTER_SANITIZE_URL)) ; 
?>