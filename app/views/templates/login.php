<?php
include('head.php');


?>
<div class="login">

  <!--
<div class="login__loader">
  <img src="../images/gif_loader.gif" alt="gifloader">
</div> -->

  <div class="row">
    <div class="columns medium-7 medium-centered">
      <div class="login__head">
        <div class="login__head__logo">

        </div>
        <h1 class="login__head__title">Modulab</h1>
        <h2 class="login__head__subtitle">Le CRM complètement adapté à vos besoins</h2>
      </div>
    </div>

    <div class="columns medium-7 medium-centered">
      <div class="login__ids__wraper">
        <div class="login__ids__content">

          <form action="/admin/connexion" method="post">
            <?php if (isset($data['erreur'])) : ?>
            <div>
              <?= $data['erreur'] ?>
            </div>
            <?php endif; ?>

            <input type="mail" name="mail" placeholder="Votre adresse e-mail">
            <input type="password" name="password" placeholder="Votre mot de passe">

            <div class="login__ids__content__help">
              <a href="#">Je n’ai pas encore de compte</a>
              <a href="#">Mot de passe oublié ?</a>
            </div>

<<<<<<< HEAD
          <button type="submit" value="connexion">Valider</button>
        </form>
=======
            <button type="submit" value="connexion">Valider</button>
          </form>
        </div>
>>>>>>> d90b96bf26746d6fdc98d585f8e7d2034d5c7190
      </div>
    </div>

  </div>
  <?php
include('footer.php');
?>
<<<<<<< HEAD
=======

  <div class="home">
    <div class="row fullWidth">
      <div class="columns medium-3">
        <div class="logo">

        </div>
      </div>
      <div class="columns medium-9">

      </div>
    </div>
  </div>
>>>>>>> d90b96bf26746d6fdc98d585f8e7d2034d5c7190
