<header>

    <div class="navbarpetit">

        <div class="portail portail-phone">
            <a class="farbe" href="#">PORTAIL ACTION MEPHI</a>
        </div>

        <div></div>

        <div class="droite">
            <ul>
                <li><a class="droite-phone" href="/#newsletter">S'inscrire à la newsletter</a></li>
                <small>|</small>
                <li><a class="" href="/presse">Presse</a></li>
                <small>|</small>
                <li><a class="" href="/contact">Contact</a></li>
                <small>|</small>
                <li><a class="" href="/faq">FAQ</a></li>

                <?php if (isset($_SESSION['email'])) : ?>
                    <small>|</small>
                    <li>
                        <a class="log" href="/logout"><img src="../assets/img/admin/<?= $_SESSION['image']; ?>" alt=""></a>
                    </li>
                <?php else : ?>
                    <small>|</small>
                    <li>
                        <a class="log" href="/admin/login"><i class="fas fa-circle-user me-2"></i></a>
                    </li>
                <?php endif; ?>
            </ul>

            </ul>
        </div>

    </div>