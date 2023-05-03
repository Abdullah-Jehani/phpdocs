<body>
    
    <?php

//fopen {in this function you specify why you open this file and in what mode you want to operate} (2modes write and read)
// fopen(filename {required} , mode{required} , includepath{optional} , context{optional})
// mode => 
// {r} => for reading ("pointer at the begining) 
// {r+} => for reading and writing ("pointer at the begining)  
// {w} => for writing ("pointer at the begining) _ will create a file if the file doesnt exists
// {w+} => for reading and writing ("pointer at the begining) _ will create a file if the file doesnt exists


// $handle = fopen("extras/users.txt" , "r") ; 
// // fgets => use to read and print a file but only read the frist line , second par used for read specific bytes of the first line {length is (optional)}; 
// // echo fgets($handle , 1) ; 


// // frad => similar to fgets but it can read all lines of file , {length is {required}} 

// echo fread($handle , 23) ; 
// // any manipulation of a file must end with fclose(FileName) ; 
// fclose($handle) ; 

//  // 2- fwrite 
//  // {a} => for write (pointer at the end)_ will create the file if it doesnt exists ; 
//  // {a+} => for read And write (pointer at the end)_ will create the file if it doesnt exists ; 
//  // {x} => create file first and open it for write only (pointer at the begining)
//  // {x} => create file first and open it for write and read (pointer at the begining) 
//  //fwrite (FileName{required} , String {required} , Lnegth{optional})

// $handle2 = fopen( "users.txt" , "a") ; 
// fwrite($handle2 , "osama") ; 
// fclose($handle2) ; 

// // looping through a file 
// // feop => enf of file 
// // { while not the end of file }
// $handle3 = fopen("userx.txt" , "r") ; 
// echo ftell($handle3) ; 
// while (! feof($handle3)) {
//     echo fgets($handle3) . "<br>"; 
// }
// echo ftell($handle3) ; 
// fclose($handle3) ; 
// ftells => it shows the current position of file 

// rewind() => used to restart the pointer at the first of file


$handle4 = fopen("text.txt" , "r") ; 
echo ftell($handle4) ; 

echo fgets($handle4). "<br>" ; 

echo ftell($handle4) ;

echo fgets($handle4) . "<br>" ; 

echo ftell($handle4) ; 

echo fgets($handle4). "<br>" ; 

rewind($handle4) ; // will tranfer the pointer to the first line 

echo(ftell($handle4)) ; 

echo fgets($handle4) . "<br>" ; 

 fseek($handle4 , 17) ; 
echo fgets($handle4) ; 
fclose($handle4) ;  
echo "<pre>" ; 
print_r(glob("*.*")) ; // it will bring all the files in this directory {.} => all files that contains .
 
echo "</pre>" ; 
rename("extras/dash.php" , "extras/dashing.php") ; // rensame the file with the same exact directory ; 

// delete a file => unlike(path  of file)  ; 



?>
</body>