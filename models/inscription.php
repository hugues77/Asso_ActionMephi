<?php
// FONCTION POUR INSERER DES INSPTIONS
if (!function_exists('insert_donateur')) {
    function insert_donateur($nom)
    {
        global $connexion;
        $insert_data = $connexion->prepare('INSERT INTO  espace_donateur  (first_name) VALUES (:first_name');
        $insert_data->bindValue(':first_name',$nom, PDO::PARAM_STR);
        // $insert_data->bindValue(':last_name',$prenom, PDO::PARAM_STR);
        // $insert_data->bindValue(':email_donateur',$email, PDO::PARAM_STR);
        // $insert_data->bindValue(':password',$password_vrais, PDO::PARAM_STR);
        return $insert_data->execute();
    }
}
?>