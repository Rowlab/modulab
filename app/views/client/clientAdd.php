<?php include(ROOT . 'app/views/templates/head.php');
 ?>
<div class="home">
  <div class="row fullWidth">
    <div class="columns medium-3 paddless">
      <nav class="home__aside">
        <div class="home__aside__logo"></div>

        <div class="home__aside__links selected">
          <a href="#">Overview</a>
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

      <div class="home__content">
        <div class="home__content__wraper">
          <div style="color: red;">
            <?php if (isset($data['erreur']['company_name'])) : ?>
            <?= $data['erreur']['company_name'] ?>
            <?php endif; ?>

          </div>

          <form action="/client/addClient" method="post">
            <input type="text" name="company_name" value="<?php if (isset($_POST['company_name'])) {
     echo $_POST['company_name'];
 } ?>" placeholder="Company name">

            <button class="button" type="input">Ajouter un client</button>
          </form>
        </div>


      </div>

    </div>
  </div>
</div>

<?php include(ROOT . 'app/views/templates/footer.php');
