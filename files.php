<?php
echo round(disk_total_space("c:") /1024 /1024 / 1024) . '<br>'; 
echo round(disk_free_space("c:") / 1024 / 1024 / 1204) . "<br>" ; 
var_dump(file_exists("session.php"))  ;  
echo "<br>" . filesize("session.php")/1024 ; 

// check if its directory || directory => folder
echo "<br>" ; 
var_dump(is_dir("extras")) ; 
echo "<br>" ; 
var_dump(is_dir("cookies.php")) ; 
 // make directory 
 mkdir("test" , 0777 , true) ;// filrst par is path {required} , second parameter is premessions 0777 mean read wite exexute for all users , third par to enable making files autometically
rmdir("test") ; // delete directory 
?>