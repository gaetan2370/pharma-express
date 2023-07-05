<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8;','root','');
if (isset($_POST['envoi'])){
		if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['dates']) AND !empty($_POST['email']) AND !empty($_POST['password'])){
			$nom = ($_POST['nom']);
			$prenom =($_POST['prenom']);
			$dates = ($_POST['dates']);
			$email = ($_POST['email']);
			$password = ($_POST['password']);
			$insertUser = $bdd->prepare('INSERT INTO users(nom, prenom, dates, email, password)VALUES(?, ?, ?, ?, ?)');
			$insertUser->execute(array($nom, $prenom, $dates, $email, $password));

			$recupUser = $bdd->prepare('SELECT * FROM users WHERE nom = ? AND prenom = ? AND dates = ? AND email = ? AND password = ?');
			$recupUser->execute(array($nom, $prenom, $dates, $email, $password));
			if ($recupUser->rowCount() > 0){
			$_SESSION['nom'] = $nom;
			$_SESSION['prenom'] = $prenom;
			$_SESSION['dates'] = $dates;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['id'] = $recupUser->fetch()['id'];
			}
			header('Location: Index.php');

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
	<link rel="stylesheet" type="text/css" href="Inscription.css">
	<title>Page d'inscription</title>
</head>
<body>
 <form action="" method="POST">

 	<h1>Inscription</h1>
 	<label for="nom">Nom:</label>
 	<input type="text" id="nom" name="nom" required>
 	<label for="prenom">Prenom:</label>
 	<input type="text" id="prenom" name="prenom" required>
 	<label for="dates">Date de naissance:</label>
 	<input type="date" id="dates" name="dates" required>
 	<label for="email">Email:</label>
 	<input type="email" id="email" name="email" required>
 	<label for="password">Mot de passe:</label>
 	<input type="password" id="password" name="password" required>
 	<input type="submit" name="envoi" id="submit" value="S'inscrire">
 	<p class="error">Veuillez remplir tous les champs.</p>

 </form>
</body>
</html>