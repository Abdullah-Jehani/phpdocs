<?php
for ($x = 1 ; $x<=10 ; $x++) {
   echo "N.${x} <br>" ;  
}
/*
foreach (posts as post ) {
    echo $post ; 
}
*/
$posts = ['First_POST' , 'Second_POST' , 'third_POST'] ; 
foreach ($posts as $index => $post) {
    echo $index+1 . ' -' . $post . '<br>' ; 
}
/*
foreach in associative arrays */
$people = [
    'first_name' => 'Ahmed' , 
    'last_name' => 'Omar' , 
    'Age' => 23
] ; 
echo '======================' ."<br>"; 
foreach ($people as $key => $ppl) {
    echo $key . ': ' . $ppl . '<br>' ; 
}
?>