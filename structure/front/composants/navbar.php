    <!-- MENU PRINCIPAL -->
    <div id="monElement">

        <nav class="nav-principal">

            <div class="menuHamburger">
                <button type="button" id="nav-icon2" aria-label="Toggle Navigation" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

            <!-- LOGIN & LOGOUT RESPONSIVE -->
            <?php if (isset($_SESSION['email'])) : ?>
                <a class="log" href="/logout"><img src="../assets/img/admin/<?= $_SESSION['image']; ?>" alt=""></a>
            <?php else : ?>
                <a class="log" href="/admin/login"><i class="fas fa-circle-user me-2"></i></a>
            <?php endif; ?>


            <!-- LOGO POUR MENU PRINCIPAL & RESPONSIVE -->
            <a class="" href="/"><img class="logo" src="../assets/img/amlogo.png" alt="Action Mephi"></a>

            <!-- FAIRE UN DON RESPONSIVE -->
            <div class="donPhone">
                <a href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank">
                    <i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
            </div>

            <ul id="popupForm">

                <li class="nav-item-active">
                    <a class="active" aria-current="page" href="/">ACCUEIL</a>
                </li>
                <li class="nav-item ligne">
                    <a class="brule" href="/nousDecouvrir">NOUS DÉCOUVRIR</a>
                </li>
                <li class="nav-item ligne">
                    <a class="brule" href="/nosDomainesActions">NOS DOMAINS D'ACTIONS</a>
                </li>
                <li class="nav-item ligne">
                    <a class="brule" href="/s-engager">S'ENGAGER</a>
                </li>

                <!-- BOUTTON DE RECHERCHE POUR MENU PRINCIPAL-->
                <li>
                    <a href=""><i class="fas fa-magnifying-glass grandir sucher d-none d-lg-block"></i></a>
                </li>

                <!-- DONATEUR POUR MENU PRINCIPAL-->
                <li class="donateur">
                    <a class="" href="/espace-donateur">
                        <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
                    </a>
                </li>


                <!-- FAIRE UN DON POUR MENU PRINCIPAL -->
                <li class="don">
                    <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- MENU PHONE OU RESPONSIVE-->
    <div class="menuPhone">
        <ul class="navbar-nav menuPhone1">

            <!-- DONATEUR RESPONSIVE OU PHONE-->
            <div class="donateur2">
                <a class="" href="/espace-donateur">
                    <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
                </a>
            </div>

            <!-- BOUTTON DE RECHERCHE RESPONSIVE OU PHONE -->
            <div class="">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Votre recherche" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Recherche</button>
                </form>
            </div>

            <div class="">
                <li class="nav-item-active">
                    <a class="active" aria-current="page" href="/">ACCUEIL</a>
                </li>
                <li class="nav-item ligne">
                    <a class="brule" href="/nousDecouvrir">NOUS DÉCOUVRIR</a>
                </li>
                <li class="nav-item ligne">
                    <a class="brule" href="/nosDomainesActions">NOS DOMAINS D'ACTIONS</a>
                </li>
                <li class="nav-item ligne">
                    <a class="brule" href="/s-engager">S'ENGAGER</a>
                </li>
            </div>
        </ul>

        <!-- PETIT MENU RESPONSIVE OU PHONE-->
        <div class="navbarpetitPhone">

            <ul class="navbar-nav">
                <li><a class="droite-phone petitPhone" href="/#newsletter">S'inscrire à la newsletter</a></li>
                <li><a class="petitPhone" href="/presse">Presse</a></li>
                <li><a class="petitPhone" href="/contact">Contact</a></li>
                <li><a class="petitPhone" href="/faq">FAQ</a></li>
            </ul>
        </div>

    </div>



    <?php
    // AFFICHAGE DES MESSAGES FLASH 
    if (isset($_SESSION['flash'])) {

        foreach ($_SESSION['flash'] as $flash) {
            $message = $flash['message'];
            $status = $flash['status'];

            switch ($status) {
                case 'success':
                    $icon = 'Félicitation';
                    break;
                case 'danger':
                    $icon = 'Echec ';
                    break;
                case 'warning':
                    $icon = 'Attention ';
            }
            echo '
                <div class="alert alert-' . $status . ' alert-dismissible fade show" role="alert">
                    <strong>' . $icon . '! </strong>' . $message . '.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
        }
        unset($_SESSION['flash']);
    }
    ?>
    </header>