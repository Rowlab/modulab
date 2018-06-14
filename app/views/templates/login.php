<?php
include('head.php');
?>
<div class="login">


<div class="login__loader">
  <img src="../images/gif_loader.gif" alt="gifloader">
</div>

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
        <?php if (isset($data['erreur'])) : ?>
        <div>
          <?= $data['erreur'] ?>
        </div>
        <?php endif; ?>

        <p>Connectez vous à votre compte</p>
        <form action="/admin/connexion" method="post">
          <div>
            <label for="mail">E-mail</label>
            <input type="mail" name="mail" placeholder="Email">
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
          </div>
          <input type="submit" value="connexion">
        </form>
      </div>
    </div>
  </div>
</div>

</div>
<?php
include('footer.php');
?>
