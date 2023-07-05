<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8;','root','');
if (isset($_POST['envoi'])){
		if(!empty($_POST['email']) AND !empty($_POST['password'])){
			$email = ($_POST['email']);
			$password =($_POST['password']);

			$recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
			$recupUser->execute(array($email, $password));

			if ($recupUser->rowCount() > 0){
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				$_SESSION['id'] = $recupUser->fetch()['id'];
				header('Location: Index.php');

			}else{
				echo "Votre email ou Mot de passe est incorrect";

			}

		}else{
			echo "Veuillez completer tous les champs...";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Connexion.css">
	<title>Page de connexion</title>
</head>
<body>
 <form action="" method="POST">
 	<h1>Connexion</h1>
 	<label for="email">Votre adresse mail:</label>
 	<input type="text" id="email" name="email">
 	<label for="password">Mot de passe:</label>
 	<input type="password" id="password" name="password">
 	<input type="submit" name="envoi" id="submit" value="Se connecter">
 	<p id="fin">Utilisez un compte</p>
 	<p align="center">
 	<a href="#"><img src="face.jpg"/></a>
 	<a href="#"><img src="mail.jpg"/></a>
 	<a href="#"><img src="twit.jpg"/></a>
 	<a href="#"><img src="wat.jpg"/></a>
 	</p>
 </form>
 <script src="Connexion.js"></script>
</body>
</html>