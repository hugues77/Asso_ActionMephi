<?php
session_start();

unset($_SESSION["email"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
setFlash('Au revoir, à bientôt!!!', 'success'); 
redirect("/");

// Détruit la session et redirige vers la page d'accueil (index.php)
// session_destroy();
// header("Location: /");
// exit();
?>