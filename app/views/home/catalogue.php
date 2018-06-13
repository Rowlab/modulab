<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Notre catalogue - L'Architecture de votre région</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/styles/style.css">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="L'Architecture de votre région, toute l'actualité de l'architecture et de la construction. L'ensemble de nos revues">
    <meta name="norobots" content="noindex, nofollow">
</head>

<body>
<main class="catalogue">
    <nav class="row">
        <div class="clearfix">
            <a href="index.html">
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
    <section class="os-catalogue clearfix">
        <h2 class="os-catalogue-title"><span>Nos</span> dernières parutions</h2>
        <div class="os-catalogue clearfix">
            <div class="os-wrapper clearfix">
                <?php
                foreach($data['projects'] as $key => $project ) :
                    ?>
                    <article>
                        <div>
                            <div class="os-title-h5">
                                <h5 class="os-revue-nb">
                                    <?= $project['revue_nb'] ?>
                                </h5>
                            </div>
                            <div class="os-img">
                                <a href="http://fr.calameo.com/read/001121299b858cd00ecf1" target="_blank"><img src="../../../public/img/<?= $project['revue_img'] ?>" alt="<?= $project['alt'] ?>"></a>
                            </div>
                            <div class="os-btn clearfix">
                                <div>
                                    <p><?= $project['revue_region'] ?></p>
                                </div>
                                <div class="os-btn-add">
                                    <p class="os-minus">-</p>
                                    <p class="os-basket-nb">0</p>
                                    <p class="os-plus">+</p>
                                </div>
                                <div>
                                    <a href="/home/panier"><button>Commander</button></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php
                endforeach;
                ?>
            </div>
        </div>
        <h4 class="os-filter-title"><span>Ou séléctionnez</span> la région de votre choix</h4>
        <div class="os-catalogue-filter clearfix">
            <h5 class="os-regions-detail clearfix">Régions France Métropole</h5>
            <div class="os-metropole zone clearfix">
                <div>
                    <a href="">Alsace</a>
                </div>
                <div>
                    <a href="">Aquitaine</a>
                </div>
                <div>
                    <a href="">Auvergne</a>
                </div>
                <div>
                    <a href="">Bourgogne</a>
                </div>
                <div>
                    <a href="">Bretagne</a>
                </div>
                <div>
                    <a href="">Centre</a>
                </div>
                <div>
                    <a href="">Champagne-Ardenne</a>
                </div>
                <div>
                    <a href="">Corse</a>
                </div>
                <div>
                    <a href="">Franche-Comté</a>
                </div>
                <div>
                    <a href="">Ile-de-France</a>
                </div>
                <div>
                    <a href="">Languedoc-Roussillon</a>
                </div>
                <div>
                    <a href="">Limousin</a>
                </div>
                <div>
                    <a href="">Lorraine</a>
                </div>
                <div>
                    <a href="">Midi-Pyrénées</a>
                </div>
                <div>
                    <a href="">Nord Pas de Calais</a>
                </div>
                <div>
                    <a href="">Poitou-Charentes - Pays de la Loire</a>
                </div>
                <div>
                    <a href="">Rhône-Alpes</a>
                </div>
            </div>
            <h5 class="os-regions-detail clearfix">Collectivités d'Outre-Mer</h5>
            <div class="os-outre-mer zone clearfix">
                <div class="clearfix">
                    <a href="">Guadeloupe</a>
                </div>
                <div class="clearfix">
                    <a href="">Guyane</a>
                </div>
                <div class="clearfix">
                    <a href="">Martinique</a>
                </div>
                <div class="clearfix">
                    <a href="">Mayotte</a>
                </div>
                <div class="clearfix">
                    <a href="">Réunion</a>
                </div>
                <div class="clearfix">
                    <a href="">Saint-Martin - Saint-Barthélemy</a>
                </div>
            </div>
            <h5 class="os-regions-detail clearfix">Autres pays</h5>
            <div class="os-abroad zone clearfix">
                <div>
                    <a href="">Belgique</a>
                </div>
                <div>
                    <a href="">Suisse</a>
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
    </section>
</main>
<script src="main/main.js"></script>
</body>

</html>