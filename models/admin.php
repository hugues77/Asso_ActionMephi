<?php
// FONCTION DE VERIFICATION SI EMAIL ET MOT DE PASSE EXISTE POUR ADMIN

if (!function_exists('verify_admin')) {
    function verify_admin($email, $password)
    {
        global $connexion;
        
        $verify_data = $connexion->prepare('SELECT * FROM admin WHERE email = :email AND password = :password'); 
        $verify_data->bindValue(':email', $email, PDO::PARAM_STR);
        $verify_data->bindValue(':password', $password, PDO::PARAM_STR);
        $verify_data->execute();
        return $verify_data->rowCount();
    }
}


// FONCTION POUR AFFICHER LES DONNEES ADMIN 

if (!function_exists('affiche_admin')) {
    function affiche_admin($email, $password)
    {
        global $connexion;
        $verify_data = $connexion->prepare('SELECT * FROM admin WHERE email = :email AND password = :password'); 
        $verify_data->bindValue(':email', $email, PDO::PARAM_STR);
        $verify_data->bindValue(':password', $password, PDO::PARAM_STR); 
        $verify_data->execute();
        return $verify_data->fetch(PDO::FETCH_ASSOC);
    }
}

?>