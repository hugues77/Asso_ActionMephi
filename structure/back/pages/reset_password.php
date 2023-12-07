<section class="p-home p-login">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-lg-3"></div>
        <div class="col-md-6 col-sm-6 col-lg-6">

    

            <h2>Réinitialisation de mot de passe</h2>

            <form action="reset_password.php" method="POST">
                <input type="hidden" name="reset_code" value="">

                <label for="new_password">Nouveau mot de passe:</label>
                <input type="password" id="new_password" name="new_password" required>

                <label for="confirm_password">Confirmer le nouveau mot de passe:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit">Réinitialiser le mot de passe</button>
            </form>
        </div>
    </div>
</section>