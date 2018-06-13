<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Gestion des projets</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-success">
      <div class="container">
        <a href="/admin" class="navbar-brand">Panel Administration</a>
        <ul class="nav navbar-nav pull-xs-right">
          <li class="nav-item"><a class="nav-link" href="/">Aller sur le site</a></li>
          <li class="nav-item"><a class="nav-link" href="/admin/deconnexion">Déconnexion</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <h1 class="text-xs-center">Administration</h1>
      <div class="row">
        <div class="col-md-6">
          <?php if ( isset( $data['erreur']['archi_office'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['archi_office'] ?></div>
          <?php endif; ?>
          <?php if ( isset( $data['erreur']['construct_name'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['construct_name'] ?></div>
          <?php endif; ?>
          <?php if ( isset( $data['erreur']['news_date'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['news_date'] ?></div>
          <?php endif; ?>

            <?php if ( isset( $data['erreur']['construct_type'] ) ) : ?>
                <div class="alert alert-danger"><?= $data['erreur']['construct_type'] ?></div>

            <?php endif; ?>          <?php if ( isset( $data['erreur']['news_place'] ) ) : ?>
                <div class="alert alert-danger"><?= $data['erreur']['news_place'] ?></div>

            <?php endif; ?>          <?php if ( isset( $data['erreur']['news_desc'] ) ) : ?>
                <div class="alert alert-danger"><?= $data['erreur']['news_desc'] ?></div>
            <?php endif; ?>

          <form action="/admin" method="post" class="p-y-3 p-x-2" enctype="multipart/form-data" novalidate>
              <h3>Ajouter une news</h3>
            <input type="text" name="archi_office" class="form-control" placeholder="archi_office" value="<?php if ( isset( $_POST['archi_office'] ) ) echo $_POST['archi_office'] ?>">
            <input type="text" name="construct_name" class="form-control" placeholder="construct_name" value="<?php if ( isset( $_POST['construct_name'] ) ) echo $_POST['construct_name'] ?>">
            <input type="date" name="news_date" class="form-control" placeholder="news_date" value="<?php if ( isset( $_POST['news_date'] ) ) echo $_POST['news_date'] ?>">
            <input type="text" name="construct_type" class="form-control" placeholder="construct_type" value="<?php if ( isset( $_POST['construct_type'] ) ) echo $_POST['construct_type'] ?>">
            <input type="text" name="news_place" class="form-control" placeholder="news_place" value="<?php if ( isset( $_POST['news_place'] ) ) echo $_POST['news_place'] ?>">
            <input type="text" name="news_desc" class="form-control" placeholder="news_desc" value="<?php if ( isset( $_POST['news_desc'] ) ) echo $_POST['news_desc'] ?>">
           <!-- <input type="file" name="picture" class="form-control-file"> -->
            <input type="submit" class="btn btn-success" value="Publier">
          </form>
        </div>
        <div class="col-md-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Éditer</th>
                <th>Supprimer</th>
                <th>Détails</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($data['projects'] as $project) :
              ?>
              <tr>
                <th><?= $project['id'] ?></th>
                <td><?= $project['archi_office'] ?></td>
                <td><a href="/admin/editer/<?= $project['id'] ?>" class="text-success">Éditer</a></td>
                <td><a href="/admin/supprimer/<?= $project['id'] ?>" class="text-success">Supprimer</a></td>
                <td><a href="/admin/details/<?= $project['id'] ?>" class="text-success">Détails</a></td>
              </tr>
              <?php
              endforeach;
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
