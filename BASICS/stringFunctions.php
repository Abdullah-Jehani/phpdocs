<?php


$string = 'Hello World';

// Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}
// we can alson include html 
$string2 = '<h1 style="color:blue">Hello World<h1>' ; 
echo $string2 ; 
// if we want to specify that only html code inserted not script for example
$string3 = '<script>alert(1)</script>' ; 
echo htmlspecialchars($string3)  ; // it will transform it to normal html code ;
//replace item with new item {%s => refers to string} , useful in authincate users and recive data from Databases ; 
printf('%s likes to %s and to %s' , 'Ahmed' , 'Code' , 'Do Nothing') ;  
printf('1+1 = %d' ,1+1 ) ; // d for decimal 
?>