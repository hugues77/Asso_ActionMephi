<?php
// FONCTION POUR AJOUTER OU AFFICHER LES MESSAGES FLASH
function setFlash($message, $status)
{
    $_SESSION['flash'][] = array(
        'message' => $message,
        'status' => $status
    );
}

function redirect($page)
{
?>
    <script>
        window.location.href = "<?= $page ?>";
    </script>
<?php
}

?>