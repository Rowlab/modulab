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

            <?php if (isset($data['erreur']['contact_name'])) : ?>
            <?= $data['erreur']['contact_name'] ?>
            <?php endif; ?>

            <?php if (isset($data['erreur']['phone'])) : ?>
            <?= $data['erreur']['phone'] ?>
            <?php endif; ?>

            <?php if (isset($data['erreur']['fax'])) : ?>
            <?= $data['erreur']['fax'] ?>
            <?php endif; ?>

            <?php if (isset($data['erreur']['address'])) : ?>
            <?= $data['erreur']['address'] ?>
            <?php endif; ?>

            <?php if (isset($data['erreur']['mail'])) : ?>
            <?= $data['erreur']['mail'] ?>
            <?php endif; ?>
          </div>

          <form action="/client/editClient/<?= $data['client'][0]['id'] ?>" method="post">
            <input type="text" name="company_name" value="<?= $data['client'][0]['company_name']?>"
              placeholder="Compagny name">

            <input type="text" name="contact_name" value="<?php if (isset($data['clientInfos'][0]['contact_name'])) {
     echo $data['clientInfos'][0]['contact_name'];
 } ?>" placeholder="Contact name">

            <input type="text" name="phone" value="<?php if (isset($data['clientInfos'][0]['phone'])) {
     echo $data['clientInfos'][0]['phone'];
 } ?>" placeholder="Phone">

            <input type="text" name="fax" value="<?php if (isset($data['clientInfos'][0]['fax'])) {
     echo $data['clientInfos'][0]['fax'];
 } ?>" placeholder="Fax">

            <input type="text" name="address" value="<?php if (isset($data['clientInfos'][0]['address'])) {
     echo $data['clientInfos'][0]['address'];
 } ?>" placeholder="Address">

            <input type="text" name="mail" value="<?php if (isset($data['clientInfos'][0]['mail'])) {
     echo $data['clientInfos'][0]['mail'];
 } ?>" placeholder="Mail">

            <button class="button" type="input">Modifier</button>
          </form>
        </div>


      </div>

    </div>
  </div>
</div>

<?php include(ROOT . 'app/views/templates/footer.php');
