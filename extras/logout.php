<?php
session_start() ;

session_destroy() ; 
header('Location: /phpcrash/session.php') ; 
?>