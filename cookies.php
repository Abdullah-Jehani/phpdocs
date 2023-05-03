<?php
// mechanisim to store data in remote browser to racking return users 
// set cookie
//structure
// ----------------------------------------------------------------------------------------------
// setcookie() => it initaize the function to start 
// first argument is the key that came from The Form for example to store it in the BrowserCookie
// Second Argument is the value that u want to store in the cookie 
// Third Argument is the time to save up the data in Browser or wxpiration date (86400 = 1day)
setcookie('name' , 'Abdullah' , time() + 30) ; 
if (isset($_COOKIE['name']))
{
    echo $_COOKIE['name'] ; 

}
// delete a cookie
setcookie('name' , '' , time() - 30) ; 
?>