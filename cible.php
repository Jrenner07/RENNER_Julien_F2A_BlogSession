<?php

	date_default_timezone_set('Europe/Paris');
	$jour = date('d');
	$mois = date('m');
	$annee = date('Y');		//Differentes variable pour la dâte et l'heure
	$heure = date('H');
	$minute = date('i');
	
	$messages = fopen('liste.txt', 'a+');	//Ouverture du fichier liste.txt
	
	if(isset($_POST['titre'],$_POST['message'])){	//Test d'éxistence des variables
		
		//Ajouts des variables dans le fichier liste.txt
		fputs($messages, '<div><strong>Titre : </strong>'.htmlspecialchars($_POST['titre']).'</br>');
		fputs($messages, htmlspecialchars($_SESSION['utilisateur']).'</br>');
		fputs($messages, $jour .'/'. $mois .'/'. $annee .'&nbsp&nbsp&nbsp&nbsp'. $heure . 'H' . $minute."<br/>");
		fputs($messages, '</br>'.htmlspecialchars($_POST['message']).'</br></br></div></br>');
		
	}
		fseek($messages, 0);	//Pointeurs au debut du fichier
		$ligne = fgets($messages);	//Ligne devient la ligne du fichier liste.txt
		echo $ligne; 				//Echo de la ligne du fichier liste.txt
		
		fclose($messages);			//Fermeture du fichier liste.txt
		
		echo '<br/>';
		echo '<br/>';	
		
		
		//UNSET($_POST); 
		UNSET($_POST['titre']);				//UNSET des zones de textes
		UNSET($_POST['message']);
		
?>