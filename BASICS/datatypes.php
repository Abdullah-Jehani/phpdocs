<?php
/*
variables must start withg $
variables are key sensitive
*/
$name = 'Abdullah' ; 
$age = 20 ; 
$has_kids = false ; 
$cash_on_hand = 23.50 ; 
echo "my name is ${name} and i'm ${age} years old" ; 
/*
to define constant => variable not going to change 
define('name' , 'value) ; 
*/ 
define('HOST' , 'localHost') ; 
define('DATABASE' ,'company' ) ; 
echo ' ' .  HOST ; 
?>