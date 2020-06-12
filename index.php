<!DOCTYPE html>
<html lang="rus">
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="UTF-8">
	<title>Auth page</title>
</head>
<body>
	<div class="wraper">
	<h1>Введите логин и пароль что бы войти на сайт!</h1>
	<p style="color:black;"></p>
	<form action="login.php" method="post">
		<input type="text" name="log" placeholder="Login"><br>
		<input type="password" name="pass" placeholder="Password"><br>
		<input type="submit" name="sub" value="Log in" class="button"> 		
	</form>
</div>
</body>
</html>