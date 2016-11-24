<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="style.css">
	<script src="scripts.js"></script>
</head>
	
<body>

	<form action="#" method="POST">
		<p>
			<label for="user">Pseudo :</br></label><input type="text" name="user" />	<!-- Zone d'entrer du pseudo -->
			<br/>
			<br/>
			<label for="password">Password :</br></label><input type="password" name="password" />	<!-- Zone d'entrer du mot de passe -->
			<br/>
			<br/>
			<input type="submit" value="Connection" />
		</p> 
	</form>

	<?php include("getid.php"); ?>	<!-- appel du php comparant les identifiants -->

</body>
</html>
