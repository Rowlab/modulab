<?php include(ROOT . 'app/views/templates/head.php');
 ?>
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

      <div class="home__content">
        <div class="home__content__wraper">
          <div class="home__content__details">
            <div class="home__content__details__notes">
              <h1>
                <?= $data['client'][0]['company_name'] ?>- Nota bene

              </h1>
              <?php if (isset($data['notes'])) :?>

              <?php foreach ($data['notes'] as $note) {
     ?>
              <div class="home__content__details__note">
                <p>
                  <?= $note['title'] ?>
                </p>
                <span>
                  <?= $note['content'] ?>
                </span>

                <a href="/client/deleteNote/<?= $note['id'] ?>" onClick="return confirm('Are you sure ?')">Remove</a>

                <a href="/client/editNote/<?= $note['id'] ?>">Edit</a>
              </div>
              <?php
 } ?>

              <?php endif; ?>
            </div>

            <a class="button expanded" href="/client/addNote/<?= $data['client'][0]['id'] ?>">Add note</a>


          </div>
        </div>
      </div>


    </div>

  </div>
</div>
</div>

<?php include(ROOT . 'app/views/templates/footer.php');
