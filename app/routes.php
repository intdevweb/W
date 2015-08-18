<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/contactez-nous/', 'Default#contact', 'contact'], //ajout de POST 
		//et de l'adresse par défaut de contctez nous (page contact)
		//le ddernier parametre est une variable (lien) appelé dans de futurs appels de page 
		//afin d'eviter d'avoir a ecrire le chemin d'acces en entier
		['GET|POST', '/About/', 'Default#about', 'about'] //ne pas mettre d'espace dans 
		//about du genre /à propos/ uitliser plutôt /a-propos/
	);