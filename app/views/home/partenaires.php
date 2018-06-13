<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/styles/style.css">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" media="all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait)" href="ipad-portrait.css" />
    <meta name="description" content="L'Architecture de votre région, toute l'actualité de l'architecture et de la construction. Votre panier est actuellement vide.">
    <title>Nos Partenaires - L'Architecture de votre région</title>
</head>

<body>
<main class="partenaires">
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
    <div class="partenaires">
        <div class="mg-regions clearfix">
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
                                <a href="#" class="list-city-link">Alsace</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Belgique</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Bretagne - Normandie</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Centre</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Champagne-Ardenne - Picardie - Nord-Pas-de-Calais</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Franche-Comté - Lorraine</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Guadeloupe</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Guyane</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Ile-de-France</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Martinique</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Poitou-Charentes - Pays de la Loire</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Réunion</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Rhône-Alpes</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Saint-Martin - Saint-barthelemy</a>
                            </li>
                            <li>
                                <a href="#" class="list-city-link">Suisse</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="partners">
                    <h4>Entreprises de la région Alsace</h4>
                    <ul>
                        <li class="mg-title-list">Agencement, mobilier, métiers d'art, décoration, cheminées</li>
                        <li>Equip'plus (68)</li>
                        <li>Euresco (67)</li>
                        <li class="mg-title-list">Cloisons, plafonds, isolation</li>
                        <li>Levieux Patrick (67)</li>
                        <li>Nippert (67)</li>
                        <li>Olry Cloisons (68)</li>
                        <li class="mg-title-list">Couverture, étanchéité, charpente, zinguerie</li>
                        <li>Arco (67)</li>
                        <li>Etad (68)</li>
                        <li>Fritsch (68)</li>
                        <li>G.E.F.C (67)</li>
                        <li>Gross Charpentes (68)</li>
                        <li>Les couvreurs Rhenans (67)</li>
                        <li>Wiedemann (67)</li>
                        <li class="mg-title-list">Démolition, ravalement, restauration, enduit, désamiantage, routes</li>
                        <li>Fregonese et fils (67)</li>
                        <li class="mg-title-list">Electricité chauffage, climatisation, plomberie</li>
                        <li>Droeller Sceer (67)</li>
                        <li>Enertec (67)</li>
                        <li>MLC (67)</li>
                        <li class="mg-title-list">Entreprise générale de bâtiment, gros-oeuvre, travaux public, génie civil, terrassement</li>
                        <li>Entreprise Ferry Démolition (68)</li>
                        <li>Lingenheld (68)</li>
                        <li>Monteiro (67)</li>
                    </ul>
                </div>
            </div>
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