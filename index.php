<?php session_start();

$_SESSION['prenom'] = 'Fred'; 
$_SESSION['nom'] = 'Durand'; 
$_SESSION['age'] = 26;  

setcookie('prenom', time() + 365*24*3600, null, null, false, true ); 
setcookie('nom','Durand', time() + 365*24*3600, null, null, false, true ); 
setcookie('age', 26, time() + 365*24*3600, null, null, false, true ); 



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/php" href="lien.php">
</head>
	<body>
			<form method="POST" action="index.php"> 

				<label> Login : <input type="text" name="login" value="" placeholder="Entrez votre Login ici : "> </label>
				<label> Mot de passe : <input type="text" name="password" value="" placeholder="Entrez votre mot de passe ici : "> </label>
				<button type="subtmit" name=""> </button>

			</form>

			 <?php 

			 ?> <p> <span> Hey tu t'appel bien </span> <?php echo $_COOKIE['prenom'] ?> <?php  echo $_COOKIE['nom']; ?> <span> ? </span> </p>
			 	<p> <span>  Tu as bien </span>  <?php echo $_COOKIE['age']; ?> <span> ans ? </span> </p> 

			 	 

			 	<p> <span> Votre IP est : </span>  <?php print_r ($_SERVER['REMOTE_ADDR']); ?> </p>
			 	<p> <span> Votre Naviguateur est : </span>  <?php print_r ($_SERVER['HTTP_USER_AGENT']); ?> </p>
			 	<p> <span> Votre serveur est : </span> <?php print_r ($_SERVER['SERVER_NAME']); ?> </p> 

			 	<p> <a href="cible.php"> Form </a> </p>
				<p> <a href="lien.php"> Lien </a> </p>
			 	<p> <a href="deconnexion.php"> Deconnexion </a> </p>
	</body>
</html>