<?php session_start();

$login=$_POST['login'];
$password=$_POST['password'];

if (isset $login) 
setcookie('login',$login);
setcookie('password',$password);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

echo $_COOKIE['login']; 
echo $_COOKIE['password']; 
?>

<a href="index.php"> Retour </a>
<a href="modif.php"> Modif </a>


</body>
</html>

