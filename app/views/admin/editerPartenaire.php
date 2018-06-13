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
            <p>Bonjour Admin,</p>
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
        <h1 class="text-xs-center">Modification</h1>

        <?php if ( isset( $data['erreur']['nom'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['nom'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['activite'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['activite'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['departement'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['departement'] ?></div>
        <?php endif; ?>
        <?php if ( isset( $data['erreur']['revue'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['revue'] ?></div>
        <?php endif; ?>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="al-ajout-title clearfix">
                <label for="titlerevue">Nom</label>
                <input type="text" id="titlerevue" name="nom" value="<?= $data['project']['nom'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Activité</label>
                <input type="text" id="num" name="activite" value="<?= $data['project']['activite'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Département</label>
                <input type="text" id="num" name="departement" value="<?= $data['project']['departement'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Revue</label>
                <input type="text" id="num" name="revue" value="<?= $data['project']['revue'] ?>">
            </div>

            <input type="submit" value="Editer">
        </form>
    </div>
</main>

</body>

</html>