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
        <p>Liste des commandes</p>
    </div>

    <table>
        <tr class="fk-titre-th">
            <th>ref</th>
            <th>Date</th>
            <th>nom</th>
            <th>n°</th>
            <th>QT</th>
            <th>prix</th>
            <th>adresse</th>
            <th>zone</th>
        </tr>

        <?php
        foreach($data['delivery'] as $project) :
            ?>
            <tr class="fk-contenu-tr">
                <td><?= $project['ref'] ?></td>
                <td><?= $project['date_commande'] ?></td>
                <td><?= $project['nom'] ?></td>
                <td>N°<?= $project['nb'] ?></td>
                <td><?= $project['qt'] ?></td>
                <td><?= $project['prix'] ?></td>
                <td><?= $project['adresse'] ?></td>
                <td><?= $project['pays'] ?></td>
                <td><a href="/commandes/editerCommande/<?= $project['id'] ?>" class="text-success">Éditer</a></td>
                <td><a href="/commandes/supprimerCommande/<?= $project['id'] ?>" class="text-success">Supprimer</a></td>
            </tr>
            <?php
        endforeach;
        ?>


    </table>



</main>

</body>

</html>