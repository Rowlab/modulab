<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Actualités - L'Architecture de votre région</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/styles/style.css">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="L'Architecture de votre région, toute l'actualité de l'architecture et de la construction.">
    <meta name="norobots" content="noindex, nofollow">
</head>

<body>
<main class="index">
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

    <div class="ag-actu-main clearfix">
        <h2 class="ag-h2">
            Toute l'actualité <span class="ag-archi-titre">de l'architecture </span>
            <br>et de la <span class="ag-archi-titre">construction</span>
        </h2>
        <div class="ag-actu1">
            <a href="#">
                <figure>
                    <img src="../../../public/img/img-7.jpg" alt="projet architecture astrale">
                    <figcaption>Projet Astrale (92) ...</figcaption>
                </figure>
            </a>

        </div>
        <div class="ag-actu2">
            <a href="#">
                <figure>
                    <img src="../../../public/img/building.jpg" alt="siège CAF building">
                    <figcaption>Nouveau siège social de la C.A.F. du Gard (30)...</figcaption>
                </figure>
            </a>
        </div>
    </div>

    <div class="ag-actu-second">
        <div class="ag-black-stick"></div>
        <div class="ag-on-black">
            <a href="#">
                <figure>
                    <img src="../../../public/img/bighouse.jpg" alt="internat lycée">
                    <figcaption>Internat du lycée agricole à Chinon (58)...</figcaption>
                </figure>
            </a>
        </div>
    </div>

    <div class="ag-actu-row">
        <div>
            <ul class="clearfix">
                <li>
                    <a href="#">
                        <figure>
                            <img src="../../../public/img/img-2.jpg" alt="délégation régionale bâtiment">
                            <figcaption>Construction de la délégation régionale du CNFPT (86)...</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="../../../public/img/img-1.jpg" alt="bowling Angers">
                            <figcaption>Aménagement du bowling Le colisée à Angers (49)...</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="../../../public/img/balcon.png" alt="logements sociaux balcons">
                            <figcaption>Création de logements sociaux avec la Mairie de Aix-Les-Bains (01)...</figcaption>
                        </figure>
                    </a>
                </li>
            </ul>
        </div>
    </div>

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