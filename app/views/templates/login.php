<?php

include('head.php');
?>

<div class="row">

  <div class="columns medium-4">
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