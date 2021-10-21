# csrf-secure
this class to secure from csrf attack

# usage
```
<?php include "csrf.php"; 
csrf::start_csrf();
?>
```

then go to login form Then create a hidden input and put these functions in it
```
csrf::token()
```

example:
```
<?php 
include "csrf.php";
csrf::start_csrf();

?>
<form action="data.php" method="POST">
	<input type="text" name="username"><br><br>
	<input type="password" name="password"  required><br><br>
	<input type="hidden" name="token" value="<?csrf::token()?>" required><br>
	<input type="submit" name="send" value="send" required>
</form>
```
Then go to the file to which you will send the data and put this code after the data validation condition
```
csrf::s_csrf();
```

example:
```
<?php
include "csrf.php";
$username =$_POST['username'];
$password =$_POST['password'];
if (isset($_POST['send'])){
	if(!empty($username && $password)){
		csrf::s_csrf();
	}else{
		echo "please correct data";
	}
}
?>
```
