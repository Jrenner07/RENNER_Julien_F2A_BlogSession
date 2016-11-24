<?php
session_start();

	$_SESSION['utilisateur'] = 'admin';		// Initialisation du nom d'utilisateur
	$_SESSION['motdepass'] = 'admin';		// Initialisation du mot de passe

	if (isset($_POST['user'],$_POST['password']) && $_POST['user'] == $_SESSION['utilisateur'] && $_POST['password'] == $_SESSION['motdepass']) { 															// Comparaison du mot de passe et nom d'utilisateur
		header('Location: Blog.php');	//Redirection vers la page du blog
	}else if (isset($_POST['user'],$_POST['password'])) {
		echo 'Invalid password';	// Si mot de passe ou nom d'utilisateur invalid
	}

		UNSET($_POST['user']);				//UNSET des zones de textes
		UNSET($_POST['password']);

?>