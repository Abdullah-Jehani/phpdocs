<?php 
 // setcookie (name{required} , value , expire , path , domain , secure , Http only) expire when session ends  
setcookie('style' , 'light' , time() + 60 * 60 * 24 * 30 , '/' ) ;
setcookie('popup' , 'done' , strtotime('+1 month')) ; 
echo "<pre>" ; 
print_r($_COOKIE) ; 
echo "</pre>" ; 

echo $_COOKIE['style'] ; 
// when you set path "/" then it will apply to all files

// modify on cookies 
// we just change the value of the cookie ; 

// delete cookie 
// setcookie('style' , 'light' , time() -1) ; 

// add an array to cookies
setcookie('style[color]' , 'red') ;
setcookie('style[font]' , 'poppins') ; 
setcookie('style[layout]' , 'boxed') ; 

print_r($_COOKIE) ; 
 
if(isset($_COOKIE['style'])) {
    echo $_COOKIE['style'['color']];
}

?>