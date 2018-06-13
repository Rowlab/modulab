<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/style_admin.css">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" media="all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait)" href="ipad-portrstyles.css" />
    <title>Document</title>
</head>

<body>
<main class="index clearfix">
    <nav class="row">
        <div class="clearfix">
            <h1>
                <img src="../../../public/img/logo.png" alt="Logo">
            </h1>
        </div>
        <div>
            <a href="/">Retour à l'accueil</a>
            <?php if ( isset( $_SESSION['id'] ) ) : ?>
                <a class="nav-link" href="/admin/deconnexion">Déconnexion</a>
            <?php endif;  ?>
        </div>
    </nav>

    <!-- nécessaire pour les positionnements fixed -->
    <div class="al-sous-port"></div>

    <div class="fk-nav-gauche">
        <ul class="fk-ul-nav-gauche">
            <li class="fk-li-nav-gauche"><a href="/admin">Gestion des revues</a></li>
            <li class="fk-li-nav-gauche"><a href="/actualites/actu">Gestion des actualités</a></li>
            <li class="fk-li-nav-gauche"><a href="/commandes/commande">Gestion des commandes</a></li>
            <li class="fk-li-nav-gauche"><a href="/partenaires/partenaire">Gestion des partenaires</a></li>
        </ul>
    </div>


    <div class="al-ajout">
        <?php if ( isset( $data['erreur']['revue_region'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['revue_region'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['revue_nb'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['revue_nb'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['revue_url'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['revue_url'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['revue_img'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['revue_img'] ?></div>
        <?php endif; ?>


        <p>Ajouter un Partenaire</p>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="al-ajout-title clearfix">
                <label for="titlerevue">Nom</label>
                <input type="text" id="titlerevue" name="nom" value="<?php if ( isset( $_POST['nom'] ) ) echo $_POST['nom'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Activité</label>
                <input type="text" id="num" name="activite" value="<?php if ( isset( $_POST['activite'] ) ) echo $_POST['activite'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Département</label>
                <input type="text" id="num" name="departement" value="<?php if ( isset( $_POST['departement'] ) ) echo $_POST['departement'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Revue</label>
                <input type="text" id="num" name="revue" value="<?php if ( isset( $_POST['revue'] ) ) echo $_POST['revue'] ?>">
            </div>

            <input type="submit" value="Ajouter">
        </form>
    </div>

    <table>
        <tr class="fk-titre-th">
            <th>nom</th>
            <th>activité</th>
            <th>département</th>
            <th>revue</th>
        </tr>

        <?php
        foreach($data['partners'] as $project) :
            ?>
            <tr class="fk-contenu-tr">
                <td><?= $project['nom'] ?></td>
                <td><?= $project['activite'] ?></td>
                <td><?= $project['departement'] ?></td>
                <td>N°<?= $project['revue'] ?></td>
                <td><a href="/partenaires/editerPartenaire/<?= $project['id'] ?>" class="text-success">Éditer</a></td>
                <td><a href="/partenaires/supprimerPartenaire/<?= $project['id'] ?>" class="text-success">Supprimer</a></td>
            </tr>
            <?php
        endforeach;
        ?>


    </table>



</main>

</body>

</html>