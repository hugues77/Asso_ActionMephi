<?php
require_once('nav_admin.php');
?>
<section class="p-login">
  <div class="row">
    <div class="col-md-2 col-sm-2 col-lg-2"></div>
    <div class="col-md-8 col-sm-8 col-lg-8">

      <form method="POST" action="" class="formAction">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $title_action = htmlspecialchars(trim($_POST["title"]));
          // $image_action = $_FILES['actionImage'];
          $city_action = htmlspecialchars(trim($_POST["city"]));
          $country_action = htmlspecialchars(trim($_POST["country"]));
          $categorie_action = htmlspecialchars(trim($_POST["categorie"]));
          $description_action = htmlspecialchars(trim($_POST["description"]));
          // $btn_action = htmlspecialchars(trim($_POST["btn_action"]));


          // VERIFICATION INPUT VIDE
          if (empty($title_action) || empty($city_action) || empty($country_action) || empty($categorie_action) || empty($description_action)) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Echec!</strong> Veuillez remplir tous les champs requis svp !.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
          } else {
            // ENREGISTREMENT DANS LA BDD
            $actions = insert_actionActions($title_action, $categorie_action, $country_action, $city_action, $description_action);
            if ($actions) {
            ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Felicitation!</strong> Action enregistré avec succès.
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

        <div class="mb-3">
          <label for="actionTitle" class="form-label">Titre de l'action</label>
          <input type="text" class="form-control" id="actionTitle" name="title">
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <div class="mb-3">
              <label for="actionImage" class="form-label">Image d'action</label>
              <input type="file" class="form-control" id="actionImage" name="image">
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <div class="mb-3">
              <label for="categorie" class="form-label">Catégorie d'action</label>
              <select class="form-select" aria-label="Default select example" name="categorie">
                <option selected>Selectionner votre catégorie</option>
                <option value="humanitaire">Humaitaire</option>
                <option value="scolarite">scolarité</option>
                <option value="communique">Communiqué de presse</option>
                <option value="douloureux">Douloureux</option>
              </select>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="actionDescription" class="form-label">Description de l'action</label>
          <textarea class="form-control" id="actionDescription" name="description" rows="4"></textarea>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <div class="mb-3">
              <label for="actionCity" class="form-label">Ville</label>
              <input type="text" class="form-control" id="actionCountry" name="city">
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12">
            <div class="mb-3">
              <label for="actionCountry" class="form-label">Pays</label>
              <input type="text" class="form-control" id="actionCountry" name="country">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="btn_action">Soumettre</button>
      </form>
    </div>
</section>