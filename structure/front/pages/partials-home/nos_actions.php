<div class="p-action">
<?php
    $nosActions = getAllActions();
    ?>
    <section>
        <div class="row mb-2 pt-5">
            <div class="col-md-10 col-sm-12 col-xs-12">
                <h2>NOS ACTIONS</h2>
            </div>
            <div class="col-md-2 col-sm-12 col-xs-12 nosAction1">
                <a href="evenements" class="btn btn-outline-info">EN SAVOIR PLUS</a>
            </div>
        </div>

        <div class="row">
        <?php foreach($nosActions as $nosAction): ?>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="card actioncolor">
                    <div class="card-body">
                        <i class="fa fa-book-open-reader"></i>
                        <h5><?= $nosAction['action_title']?></h5>
                        <p><?= $nosAction['description_action']?></p>
                        <a href="all_actions" class="btn btn-outline-info instruction">EN savoir plus</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

            <!-- <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="card actioncolor">
                    <div class="card-body">
                        <i class="fa fa-suitcase-medical"></i>
                        <h5>Medicament</h5>
                        <p>L'Afrique est le continent où nous intervenons dans le plus grand nombre de pays. 
                            En parrainant un enfant en Afrique, votre don de parrainage finance sa scolarité 
                            et ses besoins vitaux en alimentation, santé, eau et assainissement. </p>
                        <a href="all_actions" class="btn btn-outline-info medicament">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="card actioncolor">
                    <div class="card-body">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h5>Hebergement</h5>
                        <p>Dans le but de perfectionner notre vision, il est nécessaire d’obtenir un centre permettant aux personnes vivants avec un handicap d’obtenir des soins médicaux appropriés, se former, s’informer.</p>
                        <a href="all_actions" class="btn btn-outline-info hebergement">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="card actioncolor">
                    <div class="card-body">
                        <i class="fas fa-users"></i>
                        <h5>Participant</h5>
                        <p>En parrainant un enfant en Afrique, votre don de parrainage finance sa scolarité et ses besoins vitaux en alimentation, santé, eau et assainissement.  Nous désirons donc faire appel à la bienveillance de tout un chacun afin de construire cet édifice.</p>
                        <a href="all_actions" class="btn btn-outline-info participation">En savoir plus</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
</div>
