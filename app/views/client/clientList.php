<?php include(ROOT . 'app/views/templates/head.php');?>

<div class="home">
  <div class="row fullWidth">
    <div class="columns medium-3 paddless">
      <nav class="home__aside">
        <a href="/">
          <div class="home__aside__logo"></div>
        </a>
        <div class="home__aside__links ">
          <a href="/">Overview</a>
        </div>
        <div class="home__aside__links selected">
          <a href="/client">Clients</a>
        </div>
        <div class="home__aside__links">
          <a href="#" class="plug-in">Ajouter un plug-in</a>
        </div>

      </nav>
    </div>
    <div class="columns medium-9 paddless">
      <?php include(ROOT . 'app/views/templates/home-topbar.php');?>

      <?php include(ROOT . 'app/views/templates/home-clients.php');?>

      <?php //include(ROOT . 'app/views/templates/home-profil.php');?>

    </div>
  </div>
</div>
</div>
<?php include(ROOT . 'app/views/templates/footer.php');
