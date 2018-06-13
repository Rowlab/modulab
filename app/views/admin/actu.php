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
        <?php if ( isset( $data['erreur']['name_archi'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['name_archi'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['name_construct'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['name_construct'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['type_construct'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['type_construct'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['place'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['place'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['description'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['description'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['date_news'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['date_news'] ?></div>
        <?php endif; ?>


        <p>Ajouter une Actualité</p>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="al-ajout-title clearfix">
                <label for="titlerevue">Nom de l'architecte</label>
                <input type="text" id="titlerevue" name="name_archi" value="<?php if ( isset( $_POST['name_archi'] ) ) echo $_POST['name_archi'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Nom de la construction</label>
                <input type="text" id="num" name="name_construct" value="<?php if ( isset( $_POST['name_construct'] ) ) echo $_POST['name_construct'] ?>">
            </div>
            <div class="al-ajout-num clearfix">
                <label for="num">Date</label>
                <input type="date" id="num" name="date_news">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Type de construction</label>
                <input type="text" id="num" name="type_construct" value="<?php if ( isset( $_POST['type_construct'] ) ) echo $_POST['type_construct'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Place</label>
                <input type="text" id="num" name="place" value="<?php if ( isset( $_POST['place'] ) ) echo $_POST['place'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Description</label>
                <input type="text" id="num" name="description" value="<?php if ( isset( $_POST['description'] ) ) echo $_POST['description'] ?>">
            </div>

            <input type="submit" value="Ajouter">
        </form>
    </div>

    <table>
        <tr class="fk-titre-th">
            <th>Nom</th>
            <th>Date</th>
            <th>Place</th>
        </tr>

        <?php
        foreach($data['news'] as $project) :
            ?>
            <tr class="fk-contenu-tr">
                <td><?= $project['name_archi'] ?></td>
                <td><?= $project['date_news'] ?></td>
                <td><?= $project['place'] ?></td>
                <td><a href="/actualites/editerActu/<?= $project['id'] ?>" class="text-success">Éditer</a></td>
                <td><a href="/actualites/supprimerActu/<?= $project['id'] ?>" class="text-success">Supprimer</a></td>
            </tr>
            <?php
        endforeach;
        ?>


    </table>



</main>

</body>

</html>