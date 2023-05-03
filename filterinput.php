<?php
echo filter_input(INPUT_GET , "num" , FILTER_SANITIZE_NUMBER_INT) ; // we can validate and sanitize
?>
<form action="" method="GET">
    <input type="text" name="num">
    <input type="submit" value="send">
</form>