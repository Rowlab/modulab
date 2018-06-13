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
            <li class="fk-li-nav-gauche"><a href="/admin/actu">Gestion des actualités</a></li>
            <li class="fk-li-nav-gauche"><a href="/admin/commande">Gestion des commandes</a></li>
            <li class="fk-li-nav-gauche"><a href="/admin/partenaire">Gestion des partenaires</a></li>
        </ul>
    </div>

    <div class="al-ajout">
      <h1 class="text-xs-center">Modification</h1>
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
        <?php if ( isset( $data['erreur']['alt'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur']['alt'] ?></div>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="al-ajout-title clearfix">
                <label for="titlerevue">Titre</label>
                <input type="text" id="titlerevue" name="revue_region" value="<?= $data['project']['revue_region'] ?>">
            </div>

            <div class="al-ajout-img clearfix">
                <label for="image">Image</label>
                <input type="file" id="image" name="revue_img">
            </div>
            <div class="al-ajout-num clearfix">
                <label for="num">Numéro et année</label>
                <input type="text" id="num" name="revue_nb" value="<?= $data['project']['revue_nb'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">URL</label>
                <input type="text" id="num" name="revue_url" value="<?= $data['project']['revue_url'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Description de l'image</label>
                <input type="text" id="num" name="alt" value="<?= $data['project']['alt'] ?>">
            </div>

            <input type="submit" value="Editer">
        </form>
    </div>
</main>

</body>

</html>