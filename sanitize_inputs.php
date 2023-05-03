  
// it used to secure the input to ensure that website is not vurnable to sql injections
// $usernamae = filter_input(input_post , 'NAME' , FILTER_SANITIZE_FULL_SPECIAL_CHARS )

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<input type="text" name="username">
<input type="password" name="password" id="">
<input type="submit" name="login" id="">
</form>
<?php
if (isset($_POST['login'])) {
    // $usernames = $_POST['username'] ; 
    $usernames = filter_input(INPUT_POST , 'username' , FILTER_SANITIZE_SPECIAL_CHARS) ; 
    echo $usernames ; 
    // $passwords = $_POST['password'] ; 
    $passwords = filter_input(INPUT_POST , 'password' , FILTER_SANITIZE_FULL_SPECIAL_CHARS) ; 
    echo $passwords ; 
}
?>