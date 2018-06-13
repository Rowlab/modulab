<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/styles/style.css">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="L'Architecture de votre région, toute l'actualité de l'architecture et de la construction. L'ensemble de nos revues">
    <meta name="norobots" content="noindex, nofollow">
    <title>Création de compte</title>
</head>

<body>
<main class="new-a">
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

    <form action="">
        <section class="new-a">
            <div class="mg-first-step">
                <div class="wrap">
                    <div class="inner-wrap clearfix">
                        <h2>Création de compte</h2>
                        <div class="info">
                            <p>Informations personnelles</p>
                        </div>
                        <div class="wrap-left">
                            <div class="form-wrap">
                                <label for="civilite">Civilité</label>
                                <input type="text" id="civilite">
                            </div>
                            <div class="form-wrap">
                                <label for="name">NOM</label>
                                <input type="text" id="name">
                            </div>
                            <div class="form-wrap">
                                <label for="prenom">PRENOM</label>
                                <input type="text" id="prenom">
                            </div>
                        </div>
                        <div class="wrap-right">
                            <div class="form-wrap">
                                <label for="mail">E-MAIL</label>
                                <input type="email" id="mail">
                            </div>
                            <div class="form-wrap">
                                <label for="password">MOT DE PASSE</label>
                                <input type="password" id="password">
                            </div>
                            <div class="form-wrap">
                                <label for="confirm-password">CONFIRMER VOTRE MOT DE PASSE</label>
                                <input type="password" id="confirm-password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="new-a">
            <div class="mg-second-step">
                <div class="wrapper clearfix">
                    <div class="form-wrap">
                        <label for="r-social">Raison sociale</label>
                        <input type="text" id="r-social">
                    </div>
                    <div class="form-wrap">
                        <label for="activite">Activité</label>
                        <input type="text" id="activite">
                    </div>
                </div>
                <div class="wrapper">
                    <div class="form-wrap">
                        <label for="address">Adresse</label>
                        <input type="text" id="address">
                    </div>
                </div>
                <div class="wrapper">
                    <div class="form-wrap">
                        <label for="c-postal">Code postal</label>
                        <input type="text" id="c-postal">
                    </div>
                    <div class="form-wrap">
                        <label for="city">Ville</label>
                        <input type="text" id="city">
                    </div>
                    <div class="form-wrap">
                        <label for="country">Pays</label>
                        <input type="text" id="country">
                    </div>
                    <div class="form-wrap">
                        <label for="phone-number">Téléphone</label>
                        <input type="text" id="phone-number">
                    </div>
                </div>
            </div>
        </section>
        <!-- <hr> -->
        <div class="submit">
            <a href="#">S'enregistrer</a>
        </div>
    </form>
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