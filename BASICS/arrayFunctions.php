<?php
$people = ['Ahmed' , 'Osama' , 'Khalid' , 'Omar' , 'Ali'] ; 
//get lenghth 
echo count($people) ; 
echo '<br>' ; 
// search for elmenet inside an array 
var_dump( in_array('Ali',$people)) ; 
// add elemnt to an array
array_push($people , 'Abdullah' ) ;
array_push($people , 'Abdullah' ) ;
array_push($people , 'Abdullah' ) ;
array_push($people , 'Abdullah' ) ;

printArray($people) ; 

// add to the begining of an array 
array_unshift($people , 'Abd Al Rahman') ; 
printArray($people) ; 

// remove element of array at the end 
array_pop($people) ; 
array_pop($people) ; 
array_pop($people) ; 
array_pop($people) ; 
printArray($people) ; 

// remove element of array at the begining 
array_shift($people) ;
 
printArray($people) ; 

// remove specific element [it will also delete the index of element]
unset($people[0]) ; 
printArray($people) ; 

// split an array (2 is the number of chunks) 
$chunked = array_chunk($people , 2) ; 
print_r( $chunked ); 
// concat between two array 
$arr1 = [1,2,3,4] ; 
$arr2 = [5,6,7,8] ; 
$arr3 = array_merge($arr1 , $arr2) ; 
print_r ($arr3) ; 

// short hand to merge arrays 
$arr4 = [...$arr1 , ...$arr2, ...$arr3] ; 
echo '<br>' . '--------------------------------------------------' . '<br>'
 ;print_r($arr4) ; 

  // compine => when tou pass wo arrays it use the first as key and the second as value
  $a = ['red' , 'blue' , 'green' , 'yellow' , 'white' , 'black'] ; 
  $b = ['#11FFEE' , '#22FFEE' , '#EE444R' , '#443DSFD' , '#RR33WW' , '#EERR33'] ; 
  $c = array_combine($a , $b) ; 
  print_r($c) ;
  // -------------------------------------
  // print only the keys 
  $keys = array_keys($c) ; // c has key and values ;
  print_r($keys) ; 
  // --------------------------------------
  // flip an array => flip key to value and valuen to keys ; 
  $flipped = array_flip($c) ; 
  print_r($flipped) ; 
  // -------------------------------
  // ArrayMaps
  $numbers = range(1,20) ; 
  $newNumbers = array_map(function($number) {
    return "Number ${number} " ; 
  } , $numbers) ;
  print_r($newNumbers) ; 
  // ------------------------------
   // filter an array , only work with condations 
   $lessthan10 = array_filter($numbers , function($number) {
   if ($number<= 10) {
    return $number ; 
   }
   }) ; 
   print_r($lessthan10) ; 
   // -----------------------------------------
   // reduce is used when we want to add elements together {carry used to carry the numbers in each iteration }
   $addelements = array_reduce($numbers , function ($carry , $number) {
    return $carry +$number ; 
   }) ; 
   print_r($addelements) ; 
   
function printArray($array) {
    foreach ($array as $index => $ppl) {
        echo $index+1 . ' - ' . $ppl . "<br>" ;
    }
    echo '-------------------------------' . "<br>"; 
}
?>