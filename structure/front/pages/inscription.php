<section class="p-home p-login">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-lg-3"></div>
        <div class="col-md-6 col-sm-6 col-lg-6">

        <?php
        if (isset($_POST['inscription'])) {
          $nom = htmlspecialchars(trim($_POST["nom"]));
          // $image_actualite = $_FILES['actualiteImage'];
          $prenom = htmlspecialchars(trim($_POST["prenom"]));
          $email = htmlspecialchars(trim($_POST["email"]));
          $password = htmlspecialchars(trim($_POST["password"]));
          $confirmPassword = htmlspecialchars(trim($_POST["confirmPassword"]));
          $password_vrais = sha1($password);

          // VERIFICATION INPUT VIDE
          if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($confirmPassword)) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Echec!</strong> Veuillez remplir tous les champs requis svp !.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
          } elseif($password != $confirmPassword) {
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Echec!</strong>  Les deux mot de passe n'est pas indentique !.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php

          }  else {
            // ENREGISTREMENT DANS LA BDD
            $donateur = insert_donateur($nom);
            if ($donateur) {
            ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Felicitation!</strong> Inscription enregistré avec succès.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php
            } else {
            ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Echec!</strong> echéc d enregistrement !.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        <?php
            }
          }
        }
        ?>



            <h2>Inscription</h2>

            <form action="" method="POST" class="inscriptionForm">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Confirmer mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" name="confirmPassword">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="inscription">S'inscrire</button>
            </form>
        </div>

        <div class="col-md-3 col-sm-3 col-lg-3"></div>
    </div>
</section>
