<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil - L'Architecture de votre région</title>
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

    <div class="container">
        <div class="big-wrapper">
            <div class="wrapper clearfix">
                <h2><span>Toute l'actualité</span> de l'architecture <br> <span>et de la</span> construction</h2>
                <div class="inner-wrapper clearfix">
                    <div class="content">
                        <h3>Le concept</h3>
                        <p>La revue "L' Architecture de votre région" est le témoignage des hommes qui construisent aujourd'hui. Elle constitue ainsi la vitrine de leur création.</p>
                        <p>Ceci est un test Par sa diffusion ciblée, c'est aussi un support d'une exceptionnelle efficacité et porteur d'image pour tous les partenaires rédacteurs, entreprises, institutionnels et sociétés qui y participent.</p>
                    </div>
                    <div>
                        <a href="/home/catalogue">Commander</a>
                        <div>
                            <a href="#">
                                <img src="../../../public/img/belgique.jpg" alt="revue Martinique l'architecture">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper-content first-content">
        <div class="inner-wrapper">
            <p><span class="strong">Une</span> approche originale</p>
            <div>
                <p>
                    Véritable vitrine de la création architecturale d'une région ou d'un pays, elle est réalisée avec le concours des architectes représentatifs de la construction, du bâtiment, de l'urbanisme, de l'environnement et de l'aménagement du territoire.
                </p>
                <p>
                    Pour chaque architecte volontaire et dans chaque région, un reportage complet est publié avec son logo, ses coordonnées, sa raison sociale, 3 à 4 photos par réalisation et un rédactionnel détaillé auxquels s'ajoute une fiche technique comprenant maâtre d'ouvrage, maître d'œuvre, surface, durée, coût des travaux, entreprises, fabricants et fournisseurs utilisés.
                </p>
            </div>
            <ul class="clearfix">
                <li>
                    <a href="#">
                        <div>
                            <div></div>
                            <img src="../../../public/img/idf.png" alt="revue Ile-de-France l'architecture">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <div></div>
                            <img src="../../../public/img/bretagne.jpg" alt="revue Bretagne Normandie l'architecture">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <div></div>
                            <img src="../../../public/img/rhone.jpg" alt="revue Rhône-Alpes l'architecture">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper-content second-content">
        <div class="inner-wrapper">
            <p><span class="strong">Une</span> présence régionale, nationale et internationale</p>
            <div>
                <p>
                    Ce travail de fourmis permet de présenter l'actualité architecturale en région. Chaque revue devient donc un véritable outil de travail pour les professionnels de l'architecture et de la construction appartenant ou non à la région concernée (architectes, bureaux d'études, bureaux d'ingénierie, professionnels du BTP, conseils régionaux, généraux, mairies, HLM, SEM, Préfectures, DDE, promoteurs, CCI, PME-PMI).
                </p>
                <p>
                    Ainsi, la revue est une vitrine pour chaque architecte, quelle que soit sa taille et sa situation géographique. De même, l'annonceur peut définir l'étendue de sa campagne : la limiter à une seule région, l'étendre à plusieurs régions ou à un pays.
                </p>
                <p>
                    En effet, la présence de la revue dépasse le cadre hexagonal. En Outre-mer, la Martinique, la Guadeloupe, la Réunion et la Guyane. En Europe, la Belgique et la Suisse.
                </p>
                <p>
                    Sur le site www.larchitecture.com accédez à la plus grande base d'appels d'offres franûais et internationaux, publics et privés. Vous pouvez consulter les offres par zones géographiques, types de marché, savoir-faire, matières travaillées, etc. Ce site a pour ambition de devenir le site portail de l'architecture et de la construction.
                </p>
            </div>
        </div>
    </div>
    <div class="actualites">
        <div>
            <p>actualités</p>
            <a href="#">En savoir plus</a>
        </div>
        <div>
            <ul class="clearfix">
                <li>
                    <a href="#"><img src="../../../public/img/img-1.jpg" alt="bowling l'architecture"></a>
                </li>
                <li>
                    <a href="#"><img src="../../../public/img/img-2.jpg" alt="balcon l'architecture"></a>
                </li>
            </ul>
        </div>
        <div>
            <img src="../../../public/img/img-3.jpg" alt="projet astrale l'architecture">
        </div>
    </div>
    <div class="partenaires clearfix">
        <div>
            <img src="../../../public/img/partenaires.png" alt="partenaires l'architecture">
            <a href="/home/regions">Découvrir</a>
            <div class="text">Nos partenaires dans votre région</div>
        </div>
    </div>
    <div class="history">
        <p><span class="strong">Notre</span> histoire</p>
        <div>
            <p>Depuis 1990, la revue "L'Architecture de votre région" propose un panorama détaillé de l'architecture d'une région, d'un territoire ou d'un pays.</p>
            <p>Les sondages réalisés attestent de sa durée de vie et par son aspect référentiel, de sa fréquente consultation.
            </p>
            <p>Une part prépondérante est laissée à "l'image" - le soin apporté aux reproductions photographiques est la garantie d'une attention particulière des lecteurs.</p>
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