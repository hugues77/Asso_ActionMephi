<?php
if (!function_exists('insert_newsletter')) {
    function insert_newsletter($email)
    {
        global $connexion;
        $insert_data = $connexion->prepare('INSERT INTO newsletter (email_newsletter) VALUES (:email)');
        $insert_data->bindValue(':email', $email, PDO::PARAM_STR);
        return $insert_data->execute();
    }
}

// FONCTION DE VERIFICATION SI EMAIL EXISTE

if (!function_exists('verify_email')) {
    function verify_email($email)
    {
        global $connexion;
        $verify_data = $connexion->prepare('SELECT email_newsletter FROM newsletter WHERE email_newsletter = :email'); 
        $verify_data->bindValue(':email', $email, PDO::PARAM_STR);
        $verify_data->execute();
        return $verify_data->rowCount();

    }
}

