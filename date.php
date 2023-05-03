<?php
// Get TimeZone 
echo date_default_timezone_get() . "<br>" ; 
// Geet Date
echo date("yy-m-d H:i:s") . "<br>" ; 
// change TimeZone 
date_default_timezone_set("Africa/Tripoli") . "<br>" ; 
// create data object 
$d = date_create("" , timezone_open("Europe/Berlin")) ; 
echo date_format($d , "Y-m-d H:i:s") ; 
// check validaty of date 
echo "<br>" ; 
var_dump(checkdate(10 , 3 , 2002)) ; 
echo "<br>" ; 
var_dump(checkdate(32 , 3 , 2002)) ; 
?>