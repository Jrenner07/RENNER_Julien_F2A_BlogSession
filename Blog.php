<?php
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="style.css">
	<script src="scripts.js"></script>
</head>
	
<body>

	<?php include("cible.php"); ?>	<!--Appel de cible.php -->
	

</body>
	<footer>
		<form action="#" method="POST">
			<p>
				<label for="titre">Titre :</br></label><input type="text" name="titre" />	<!--Zone d'entré du titre -->
				<br/>
				<br/>
				<label for="message">Message :</br></label><input type="text" size="50" name="message"/>	<!--Zone d'entré de texte -->
				<br/>
				<br/>
				<input type="submit" value="Poster" />		<!--Bouton "Poster" -->
			</p> 
		</form>
		<form action="logout.php" method="POST">		<!-- Bout de déconnexion -->
     		<input type="submit" name="logout" value="Déconnexion" />
		</form>
	</footer>
</html>