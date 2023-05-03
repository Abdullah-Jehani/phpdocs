<?php 
// file handaling => red , write , close
$file = 'extras/users.txt' ; 
if (file_exists($file)) { // check if file exists 
$handle = fopen($file , 'r') ; // variable that used to open a file and specify the mode (r=> read)
$contents = fread($handle , filesize($file)) ; // actual red of file
fclose($handle) ; // close file after reading the whole file
echo $contents ; 
}else {
    $handle = fopen($file , 'w') ; // open file and set the mode to writing  
    $contents = 'Abdullah' . PHP_EOL . 'Osama' . PHP_EOL . 'Khalid' ; // insert the content manually 
    fwrite($handle , $contents) ; // first argument is where to store , the second is what to store ;
    fclose($handle) ; 
}
?>