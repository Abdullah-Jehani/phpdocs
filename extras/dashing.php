<?php
session_start() ; 
    if (isset($_SESSION['username'])) {
        echo '<h1> Welcome ' . $_SESSION['username'] . '</h1>' ; 
        // destroy a session 
        echo '<a href="logout.php">Logout</a>' ;
    }else {
        echo '<h1> Welcome Guest </h1>' ; 
        echo '<a href="/phpcrash/session.php">Home</a>' ; 
    }
?>