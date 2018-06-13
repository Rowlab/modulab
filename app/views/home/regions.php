<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/styles/style.css">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" media="all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait)" href="ipad-portrait.css" />
    <meta name="description" content="L'Architecture de votre région, toute l'actualité de l'architecture et de la construction. Votre panier est actuellement vide.">
    <title>Nos régions - L'Architecture de votre région</title>
</head>

<body>
<main class="mg-regions">
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
    <div class="mg-regions">
        <div class="wrapper clearfix">
            <div class="list-regions clearfix">
                <div>
                    <p>Sélectionnez</p>
                    <p>votre</p>
                    <div>
                        <p>région</p>
                    </div>
                </div>
                <div class="list-city">
                    <ul>
                        <li>
                            <a href="/home/partenaires">Alsace</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Belgique</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Bretagne - Normandie</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Centre</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Champagne-Ardenne - Picardie - Nord-Pas-de-Calais</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Franche-Comté - Lorraine</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Guadeloupe</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Guyane</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Ile-de-France</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Martinique</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Poitou-Charentes - Pays de la Loire</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Réunion</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Rhône-Alpes</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Saint-Martin - Saint-barthelemy</a>
                        </li>
                        <li>
                            <a href="/home/partenaires">Suisse</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <img src="../../../img/img-1.png" alt="building l'Architecture">
            </div>
        </div>
    </div>
    <footer class="clearfix">
        <div>
            <address>
                <p>Groupe SOFRE&amp;COM Société Française d'Edition et de Communication
                    <br> 9/11 rue Jacquard
                    <br> 93315 Le Pré Saint Gervais cedex
                    <br> France
                </p>
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