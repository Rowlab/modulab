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
            <li class="fk-li-nav-gauche"><a href="/admin/commande">Gestion des commandes</a></li>
            <li class="fk-li-nav-gauche"><a href="/admin/partenaire">Gestion des partenaires</a></li>
        </ul>
    </div>

    <div class="al-ajout">
        <h1 class="text-xs-center">Modification</h1>
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
        <form action="" method="post" enctype="multipart/form-data">

            <div class="al-ajout-title clearfix">
                <label for="titlerevue">Nom de l'architecte</label>
                <input type="text" id="titlerevue" name="name_archi" value="<?= $data['project']['name_archi'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Nom de la construction</label>
                <input type="text" id="num" name="name_construct" value="<?= $data['project']['name_construct'] ?>">
            </div>
            <div class="al-ajout-num clearfix">
                <label for="num">Date</label>
                <input type="date" id="num" name="date_news" value="<?= $data['project']['date_news'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Type de construction</label>
                <input type="text" id="num" name="type_construct" value="<?= $data['project']['type_construct'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Place</label>
                <input type="text" id="num" name="place" value="<?= $data['project']['place'] ?>">
            </div>

            <div class="al-ajout-num clearfix">
                <label for="num">Description</label>
                <input type="text" id="num" name="description" value="<?= $data['project']['description'] ?>">
            </div>


            <input type="submit" value="Editer">
        </form>
    </div>
</main>

</body>

</html>