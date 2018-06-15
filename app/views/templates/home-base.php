<div class="home">
  <div class="row fullWidth">
    <div class="columns medium-3 paddless">
      <nav class="home__aside">
        <div class="home__aside__logo"></div>

        <div class="home__aside__links selected">
          <a href="#">Overview</a>
        </div>
        <div class="home__aside__links">
          <a href="#">Clients</a>
        </div>
        <div class="home__aside__links">
          <a href="#" class="plug-in">Ajouter un plug-in</a>
        </div>

      </nav>
    </div>
    <div class="columns medium-9 paddless">
        <?php include(ROOT . 'app/views/templates/home-topbar.php');?>


      <div class="home__content">
        <div class="home__content__wraper">
          <h1 class="home__content__title">Bienvenue Jane</h1>
          <h2 class="home__content__subtitle">Personnalisez votre espace Modulab 📊</h2>
          <div class="home__content__wiget">
            <p>+ Ajouter un widget</p>
          </div>
        </div>


        <?php include(ROOT . 'app/views/templates/home-profil.php');?>
      </div>
    </div>
  </div>
</div>
