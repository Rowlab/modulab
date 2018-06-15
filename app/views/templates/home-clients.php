<div class="home__content">
  <div class="home__content__wraper">
    <h1 class="home__content__title">Liste de vos clients</h1>
    <input type="text" name="searchbar" placeholder="Rechercher un client par son nom" class="home__content__clients__search">

    <div class="home__content__clients__order">
      <ul>
        <li>TRI</li>
        <li class="active">Tous</li>
        <li>Passés</li>
        <li>Actuels</li>
      </ul>
    </div>
    <div class="home__content__clients__wraper">
      <?php foreach ($data['clients'] as $client) {
    ?>
      <div class="home__content__clients">
        <a href="/client/detailsClient/<?= $client['id'] ?>">
          <h3>
            <?= $client['company_name'] ?>
          </h3>
          <a class="home__content__clients__modify" href="/client/editClient/<?= $client['id'] ?>"></a>
          <?php if ($_SESSION['infos'][0]['role'] == 0) : ?>
          <a class="home__content__clients__remove" href="/client/deleteClient/<?= $client['id'] ?>"
            onClick="return confirm('Are you sure ?')">X</a>
          <?php endif; ?>
        </a>
      </div>
      <?php
} ?>
      <a class="button expanded" href="/client/addClient">Ajouter un nouveau client</a>


    </div>
  </div>
</div>