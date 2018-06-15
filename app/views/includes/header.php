<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title></title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li>
          <a href="/">Retour à l'accueil</a>
        </li>
        <?php if (isset($_SESSION['id'])) : ?>
        <li>
          <a href="/admin/deconnexion">Déconnexion</a>
        </li>
        <?php endif; ?>
        <li>
          <a href="/user">User list</a>
        </li>
        <li>
          <a href="/client">Client list</a>
        </li>
      </ul>
      <?php if (isset($_SESSION['id'])) : ?>
      <a href="/user/editUser/<?= $_SESSION['id'] ?>">Connected as
        <?= $_SESSION['infos'][0]['name']; ?>
      </a>
      <?php endif; ?>
      </div>
    </nav>
  </header>