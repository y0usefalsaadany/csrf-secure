# csrf-secure
this class to secure from csrf attack

# usage
```
<?php include "csrf.php"; 
csrf::start_csrf();
?>
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
