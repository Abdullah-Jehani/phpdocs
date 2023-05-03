<?php

$person = [
    'First_name' => 'Ahmed' ,
    'Last_name' => 'Omar' , 
    'Age' => 23
] ; 
/* associative array
used to fetch and recive data from json files
*/
$people = [
    [
        'First_name' => 'Ahmed' ,
        'Last_name' => 'Omar' , 
        'Age' => 23
    ] ,
        ['First_name' => 'Ahmed' ,
        'Last_name' => 'Omar' , 
        'Age' => 32
    ] ,
        ['First_name' => 'Ahmed' ,
        'Last_name' => 'Omar' , 
        'Age' => 90
    ] 
] ;
print_r($people[1]['Age']) ; 

/*
transform an array to json 

*/
var_dump(json_encode($people)) ; 
print_r($people[1]['Last_name']) ;
?>
