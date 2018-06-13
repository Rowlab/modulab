<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/styles/style.css">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" media="all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait)" href="ipad-portrstyles.css" />
    <meta name="description" content="L'Architecture de votre région, toute l'actualité de l'architecture et de la construction. Votre panier est actuellement vide.">
    <title>Votre panier - L'Architecture de votre région</title>
</head>

<body>
<main class="p-step-2">
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

    <section class="p-step-2">
        <h2><span class="strong">Mon</span> panier</h2>
        <div>
            <ul class="clearfix">
                <li>
                    <img src="../../../public/img/idf.png" alt="revue Ile de France - l'Architecture">
                </li>
                <li>
                    <div>
                        <form action="">
                            <div class="wrap-form clearfix">
                                <div>
                                    <label for="command">Ma commande</label>
                                </div>
                                <div>
                                    <p>17 €</p>
                                </div>
                            </div>
                            <div class="wrap-form clearfix">
                                <div>
                                    <label for="Quantite">Quantité</label>
                                </div>
                                <div class="clearfix">
                                    <p class="minus">-</p>
                                    <div>
                                        <input type="number" value="1">
                                    </div>
                                    <p class="plus">+</p>
                                </div>
                            </div>
                            <div class="wrap-form clearfix">
                                <div>
                                    <label for="">Frais de port</label>
                                </div>
                                <div>
                                    <p>3 €</p>
                                </div>
                            </div>
                            <div class="wrap-form clearfix">
                                <div>
                                    <p>Total</p>
                                </div>
                                <div>
                                    <p><span class="total">75</span> €</p>
                                </div>
                            </div>
                            <div class="wrap-form clearfix">
                                <input type="submit" value="PAIEMENT">
                            </div>
                            <div class="wrap-form clearfix">
                                <img src="../../../public/img/paiement.png" alt="paiements l'Architecture">
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
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