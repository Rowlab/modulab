<header>
  <!-- <nav>
    <ul>
      <li>
        <a href="/">Retour à l'accueil</a>
      </li>
      <?php //if (isset($_SESSION['id'])) : ?>
      <li>
        <a href="/admin/deconnexion">Déconnexion</a>
      </li>
      <?php// endif; ?>
      <li>
        <a href="/user">User list</a>
      </li>
      <li>
        <a href="/client">Client list</a>
      </li>
    </ul>
    <?php //if (isset($_SESSION['id'])) : ?>
    <a href="/user/userProfile/">Connected as
      <?php //$_SESSION['infos'][0]['name']; ?>
    </a>
    <?php //endif; ?>
    </div>
  </nav> -->
</header>

<?php include($template_path . 'login.php'); ?>
