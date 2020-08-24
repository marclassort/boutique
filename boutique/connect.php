<?php 

// permet de vérifier si l'utilisateur est connecté
function is_logged(): bool {
	// débutera la session si non lancée
 	if (session_status() == PHP_SESSION_NONE) {
 		session_start();
 	} 
 	return !empty($_SESSION['connected']);
 }

// permet d'obliger l'utilisateur à être connecté
function user_connected(): void {
 	if (!is_logged()) {
		header('Location: login.php');
		exit();
	}
}

?>
