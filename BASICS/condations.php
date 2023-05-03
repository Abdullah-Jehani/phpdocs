<?php
$age = 10 ; 
if ($age>=20) {
    echo 'you are old enough to vote' ; 
} else {
    echo 'Sorry , you are not old enough to vote' ; 
}
$time = date("H") ; 
if ($time>12) {
    echo 'Good Morning' ; 
}elseif($time <12) {
    echo 'Good Afternoon' ; 
}
$favcolor = 'red' ; 
switch($favcolor) {
    case 'red' :
        echo 'your fav color is red' ; 
        break ; 
        case 'blue' :
            echo 'your fav color id blue' ; 
            break ; 
            default :
            echo 'no' ; 
}
?>