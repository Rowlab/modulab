<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - L'Architecture de votre région</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/styles/style.css">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="L'Architecture de votre région, toute l'actualité de l'architecture et de la construction. L'ensemble de nos revues">
    <meta name="norobots" content="noindex, nofollow">
</head>
<body>
<main class="connect">
    <nav class="row">
        <div class="clearfix">
            <a href="/home/index">
                <h1>
                    <img src="../../../public/img/logo.png" alt="logo l'architecture">
                </h1>
            </a>
        </div>
        <div class="clearfix">
            <ul class="clearfix">
                <li><a href="/home/actualites">Actualités</a></li>
                <li><a href="/home/partenaire">Partenaire</a></li>
                <li><a href="/home/catalogue">Catalogue</a></li>
                <li><a href="/home/panier">Panier</a></li>
            </ul>
        </div>
        <div class="clearfix">
            <ul class="clearfix">
                <?php if ( !isset( $_SESSION['id'] ) ) : ?>
                    <li><a href="/admin/connexion">S'identifier</a></li>
                    <li><a href="/home/compte">Créer mon compte</a></li>

                <?php else : ?>
                    <li class="nav-item"><a class="nav-link" href="/admin/deconnexion">Déconnexion</a></li>
                <?php endif;  ?>
            </ul>
        </div>
    </nav>

    <div class="mg-connect-form">
        <?php if ( isset( $data['erreur'] ) ) : ?>
            <div class="alert alert-danger"><?= $data['erreur'] ?></div>
        <?php endif; ?>
        <p>Connectez vous à votre compte</p>
        <form action="/admin/connexion" method="post">
            <div class="wrapper">
                <label for="mail">E-mail</label>
                <input type="mail" id="mail" name="login" placeholder="votre mail @">
            </div>
            <div class="wrapper">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="votre mot de passe">
            </div>
            <input type="submit" value="connexion">
        </form>
    </div>
    <footer class="clearfix">
        <div>
            <address>
                <p>Groupe SOFRE&amp;COM Société Française d'Edition et
                    <br>
                    de Communication
                    <br>
                    9/11 rue Jacquard
                    <br>
                    93315 Le Pré Saint Gervais cedex
                    <br>
                    France</p>
            </address>
        </div>
        <div>
            <p>Abonnez vous à notre newsletter</p>
            <div>
                <input type="mail" placeholder="Votre mail @">
            </div>
        </div>
        <div>
            <p><a href="#">Mentions légales</a></p>
        </div>
    </footer>
</main>
<script src="../../../../main/main.js"></script>
</body>
</html>