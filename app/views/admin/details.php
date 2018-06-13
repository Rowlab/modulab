<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Semaine intensive</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-success">
    <div class="container">
        <a href="/admin" class="navbar-brand">Détails d'un magasine</a>
        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item"><a class="nav-link" href="/">Aller sur le site</a></li>
            <li class="nav-item"><a class="nav-link" href="/admin/deconnexion">Déconnexion</a></li>
            <li class="nav-item"><a class="nav-link" href="/admin/index">Administration</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">

        <?php
        foreach( $data['project'] as $key => $project ) :

            ?>

            <h1>Magasine numéro <?= $project['id']; ?></h1>

            <div class="col-md-6">
                <article>
                    <h1 class="h3"><?= $project['title'] ?> <span class="text-muted lead"> <time><?= $project['created_at'] ?></time></span></h1>
                    <img class="img-fluid" src="/img/<?= $project['picture'] ?>" alt="<?= $project['picture'] ?>">
                    <p class="lead text-justify"><?= $project['body'] ?></p>
                </article>
            </div>
            <?php
            if( $key % 2 == 1 ) {
                echo '<div class="hidden-sm-down clearfix"></div>';
            }
        endforeach;
        ?>
    </div>
</div>
</body>
</html>
