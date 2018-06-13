<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notre Partenaire - L'Architecture de votre région</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/styles/style.css">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="L'Architecture de votre région, toute l'actualité de l'architecture et de la construction.">
    <meta name="norobots" content="noindex, nofollow">
</head>
<body>
<main class="partenaire">
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
    <section>
        <h4 class="os-partners-title"><span>Notre</span> partenaire</h4>
        <div class="iframe-responsive-wrapper">
            <iframe src="http://www.doubletrade.com" scrolling="no" seamless="seamless"></iframe>
        </div>
    </section>
    <footer class="clearfix">
        <div>
            <address>
                <p>Groupe SOFRE&amp;COM Société Française d'Edition et de Communication
                    <br>
                    9/11 rue Jacquard
                    <br>
                    93315 Le Pré Saint Gervais cedex
                    <br>
                    France</p>
            </address>
        </div>
        <div>
            <p><a href="#">Contact</a></p>
        </div>
        <div>
            <p><a href="#">Mentions légales</a></p>
        </div>
    </footer>
</main>
<script src="main/main.js"></script>

</body>
</html>