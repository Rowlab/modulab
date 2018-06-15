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

      <a href="/client/addClient">Add new client</a>

      <?php if (isset($data['clients'])) {
    foreach ($data['clients'] as $client) {
        ?>
      <div>
        <p>Compagny name :
          <?= $client['company_name'] ?>
        </p>

        <a href="/client/editClient/<?= $client['id'] ?>">Edit</a>
        <a href="/client/detailsClient/<?= $client['id'] ?>">Details</a>

        <?php if ($_SESSION['infos'][0]['role'] == 0) : ?>
        <a href="/client/deleteClient/<?= $client['id'] ?>" onClick="return confirm('Are you sure ?')">Remove</a>
        <?php endif; ?>
        <br />
        <br />
      </div>

      <?php
    }
}
?>

      <?php //include(ROOT . 'app/views/templates/home-content.php');?>
      <?php include(ROOT . 'app/views/templates/home-profil.php');?>

    </div>
  </div>
</div>
</div>