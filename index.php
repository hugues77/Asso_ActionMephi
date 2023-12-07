<?php

session_start();

include("allInclude.php");


$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {


        /*------------------------------ MENU PRINCIPAL ----------------------------*/


        /* HOME */
    case 'home':

        include 'structure/front/pages/home.php';
        break;

        /* DECOUVRIR */
    case 'nousDecouvrir':

        include 'structure/front/pages/nousDecouvrir.php';
        break;

        /* DOMAINS DES ACTIONS */
    case 'nosDomainesActions':

        include 'structure/front/pages/nosDomainesActions.php';
        break;

        /* S'ENGAGER */
    case 's-engager':

        include 'structure/front/pages/s_engager.php';
        break;

        /* ESPACE DENATEUR */
    case 'espace-donateur':

        include 'structure/front/pages/espace_donateur.php';
        break;

        /* FAIRE UN DON */
    case 'faire-don':

        include 'structure/front/pages/faire_don.php';
        break;

        /* INSCRIPTION */
    case 'inscription':

        include 'structure/front/pages/inscription.php';
        break;

        /* FORGOT PASSWORD */
    case 'forgot_password.php':

        include 'structure/front/pages/forgot_password.php';
        break;

        /* RESET PASSWORD */
    case 'reset_password.php':

        include 'structure/front/pages/reset_password.php';
        break;


        /*---------------------------- PAGES INTERNE --------------------------- */

        /* TOUTES LES ACTUALITES */
    case 'all_news':

        include 'structure/front/pages/all_news.php';
        break;

        /* TOUTES LES ACTIONS */
    case 'all_actions':

        include 'structure/front/pages/all_actions.php';
        break;


        /* DEVENIR BENEVOLE */
    case 'dev_benevole':

        include 'structure/front/pages/dev_benevole.php';
        break;




        /*---------------------------- SOUS MENU OU PETIT NAVBAR --------------------------- */

        /* PORTAIL ACTION MEPHI */
    case 'portail':

        include 'structure/front/pages/portail.php';
        break;

        /* S'INSCRIRE A LA NEWSLETTER */
    case 'newsletter':

        include 'structure/front/pages/newsletter.php';
        break;

        /* PRESSE */
    case 'presse':

        include 'structure/front/pages/presse.php';
        break;

        /* CONTACT */
    case 'contact':

        include 'structure/front/pages/contact.php';
        break;

        /* FAQ */
    case 'faq':

        include 'structure/front/pages/faq.php';
        break;




        /* -------------------TRAITEMANT BACK-END------------------------ */

        /* BACK-NEWSLETTER */
    case 'back-newsletter':

        include 'structure/back/pages/back-newsletter.php';
        break;

        /* LOGOUT */
    case 'logout':

        include 'structure/back/pages/logout.php';
        break;

        /* ADMIN */
    case 'admin/admin':

        include 'structure/back/pages/admin/admin.php';
        break;

        /* LOGIN */
    case 'admin/login':

        include 'structure/back/pages/login.php';
        break;

        /* BACK ACTUALITES */
    case 'admin/actualites':

        include 'structure/back/pages/actuaLit.php';
        break;

        /* BACK DEVENIR BENEVOLE */
    case 'admin/devBen':

        include 'structure/back/pages/devBen.php';
        break;

        /* BACK NOS ACTIONS */
    case 'admin/nosAct':

        include 'structure/back/pages/nosAct.php';
        break;

        /* USERS */
    case 'admin/users':

        include 'structure/back/pages/users.php';
        break;

        /* CONNEXION USERS */
    case 'admin/connexionUsers':

        include 'structure/back/pages/connexionUsers.php';
        break;

        /* RESET PASSWORD */
    case 'reset_password.php':

        include 'structure/back/pages/reset_password.php';
        break;




        /* 404 NOT FOUND */
    default:
        header("HTTP/1.1 404 Not Found");
        include 'structure/front/pages/page-404.php';
        break;
        /* 404 NOT FOUND */
}

include('structure/front/composants/footer.php');
