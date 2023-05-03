<?php 
 // sessions are a way to store information (in variables) to be used accross multiple pages 
 // unlike cookies , sessions are stored on the server .
 // initializing a session 
 session_start() ; 
 // is set is used to determine if the variable have been used or not , in other words to check it has a value .
 if (isset($_POST['login'])) {
    // $usernames = $_POST['username'] ; 
    $usernames = filter_input(INPUT_POST , 'username' , FILTER_SANITIZE_SPECIAL_CHARS) ; 

    // $passwords = $_POST['password'] ; 
   $pass = $_POST['password'] ; 
   if ($usernames == 'Abdullah' && $pass == 'password') {
    $_SESSION['username'] = $usernames ; 
    // where you want to head after verifying inputs 
    header('Location: /phpcrash/extras/dash.php') ;

   } else {
    echo 'incorrect credintials' ; 
   }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
    <label for="username">Username: </label>
    <input type="text" name="username">
</div>
<div>
    <label for="password">Password: </label>
    <input type="password" name="password" id="">
</div>
<input type="submit" name="login" id="">
</form>

