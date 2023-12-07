<?php
// TRAITEMENT DU FORMULAIRE D'INSCRIPTION A LA NWESLETTER
if (isset($_POST['btn-newsletter'])) {
    $email = htmlspecialchars(trim($_POST['email']));

    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ((verify_email($email)) > 0) {
                setFlash('Votre e-mail a été déjà enregistré : ' . $email, 'danger');
                redirect("/");
            } else {
                // Enregistrement des email dans la DB
                $newsletter = insert_newsletter($email);
                if ($newsletter) {
                    setFlash('Votre e-mail est bien enregistré : ' . $email, 'success');
                    redirect("/");
                } else {
                    setFlash('Probmem : ', 'danger');
                    redirect("/");
                }
                // header('Location:/'); 
                redirect("/");
            }
        } else {
            setFlash('Votre e-mail n\'est pas valide : ' . $email, 'danger');
            // header('Location:/'); 
            redirect("/");
        }
    } else {
        setFlash('inserer votre email svp', 'danger');
        // header('Location:/');

        redirect("/");
    }
}
