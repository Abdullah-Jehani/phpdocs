<?php 
// print_r(filter_list()) ; // it shows the available methods 

// echo filter_id("boolean")  ; // return the ID 

$val = true ; 
if (filter_var($val , FILTER_VALIDATE_BOOLEAN)) { // check the variable type
 echo "this is true"  ; 
 echo "<br>" ; 
} else {

    echo "this is false" ; 

}
echo "-------------" . "<br>"; 


$val2 = "qqqq" ; 
if (filter_var($val2 , FILTER_VALIDATE_BOOLEAN , FILTER_NULL_ON_FAILURE)) { // here it validate if its true or not ||  
    echo "this is true" ; 
} else {
    echo "this is false" ; 
}
echo "<br>" . "-------------------------------" . "<br>" ;  
$val3 = "" ; 
var_dump(filter_var($val3 , FILTER_VALIDATE_BOOL , FILTER_NULL_ON_FAILURE)) ; // this will return null if the value isn't {(0 , off , fasle , no) , {1 , on , true , yes}} ; 
echo "<br>" . "-------------------------------" . "<br>" ;  
$url = "https://libya.com/?id=100" ; 
var_dump(filter_var($url , FILTER_VALIDATE_URL , ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED |FILTER_FLAG_QUERY_REQUIRED])) ; // validate The Url's {has a path = true , has quet = true}
echo "<br>" . "-------------------------------" . "<br>" ;  

$ip = "255.255.255.255" ; 
var_dump(filter_var($ip , FILTER_VALIDATE_IP , ["flags" => FILTER_NULL_ON_FAILURE , FILTER_FLAG_IPV4])) ; // validate the ip address
echo "<br>" . "-------------------------------" . "<br>" ;  
$mac = 'sasasa' ; 
var_dump(filter_var($mac , FILTER_VALIDATE_MAC)) ; 
echo "<br>" . "-------------------------------" . "<br>" ;  
$email = "ososos@dsds.com" ; 
var_dump(filter_var($email , FILTER_VALIDATE_EMAIL , FILTER_NULL_ON_FAILURE)) ; 
echo "<br>" . "-------------------------------" . "<br>" ;  
$int = "100" ; 
var_dump(filter_var($int , FILTER_VALIDATE_INT , FILTER_NULL_ON_FAILURE)) ;  
echo "<br>" . "-------------------------------" . "<br>" ;  
var_dump(filter_var(
    $int , 
    FILTER_VALIDATE_INT , 
    ["flags" => FILTER_NULL_ON_FAILURE , "options" => ["min_range" => 50 , "max_range"=> 90]] // 1- check if its integer | 2- check for the range 
))
?>
