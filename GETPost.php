<?php
// we pass data through url and forms using get and post 
if (isset($_POST['submit'])){
    echo $_POST['name'] ;
    echo $_POST['age'] ; 
}

?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?> ?name=john&age=30">click</a>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST ">
<div>
    <label for="name">NAME: </label>
    <input type="text" name="name" id="">
</div>
<div>
    <label for="age">AGE: </label>
    <input type="text" name="age" id="">
</div>
<input type="submit" value="submit" name="submit">
</form>



