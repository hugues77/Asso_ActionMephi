<?php
// FILTER AUTORISATION FOR SESSION EMAIL
if (!isset($_SESSION['email'])) {
  redirect('/admin/login');
}
require_once ('structure/back/pages/nav_admin.php');
?>

<!-- DEBUT MENU ADMIN -->
<!-- <nav class="navbar navbar-light bg-light p-admin">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Paneau d'administration</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/admin/admin">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/actualites">Actualite</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/nosAct">Nos Actions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/devenirBen">Dévénir Bénévole</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav> -->
<!-- FIN MENU ADMIN -->

<section class="p-home">

      <section class="p-login">
        <div class="row">
          <div class="col-md-2 col-sm-2 col-lg-2"></div>
          <div class="col-md-8 col-sm-8 col-lg-8">

            <p class="p-admin">
            <h2>Bienvenue au panel d'administration du projet ACTION MEPHI</h2>
            </p>

          </div>
          <div class="col-md-2 col-sm-2 col-lg-2"></div>
        </div>
      </section>  
  
</section>