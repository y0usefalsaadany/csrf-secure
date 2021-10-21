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
