<?php include(ROOT . 'app/views/templates/head.php'); ?>

<div class="home">
  <div class="row fullWidth">
    <div class="columns medium-3 paddless">
      <nav class="home__aside">
        <div class="home__aside__logo"></div>

        <div class="home__aside__links selected">
          <a href="/">Overview</a>
        </div>
        <div class="home__aside__links">
          <a href="/client">Clients</a>
        </div>
        <div class="home__aside__links">
          <a href="#" class="plug-in">Ajouter un plug-in</a>
        </div>

      </nav>
    </div>
    <div class="columns medium-9 paddless">
      <?php include(ROOT . 'app/views/templates/home-topbar.php');?>



      <?php include(ROOT . 'app/views/templates/home-content.php');?>
      <!-- ================= Profil user ================== -->
      <div class="home__content__wraper">
        <h1 class="home__content__title">Votre profil</h1>
        <div class="home__content__profil__wraper">
          <div class="home__content__profil__info">
            <h3 class="home__content__profil__info__name">
              <?= $_SESSION['infos'][0]['name'] . ' ' . $_SESSION['infos'][0]['surname'] ?>
            </h3>
            <p class="home__content__profil__info__job">Strategic Planner @Ethereon</p>
            <p class="home__content__profil__info__phone">06 89 01 92 35</p>
            <p class="home__content__profil__info__email">
              <?= $_SESSION['infos'][0]['mail'] ?>
            </p>
            <div class="home__content__profil__info__modify">

            </div>
          </div>
        </div>
      </div>

      <!-- ================= Profil user ================== -->

    </div>
  </div>
</div>
</div>

<?php include(ROOT . 'app/views/templates/footer.php');
