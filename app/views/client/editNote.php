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
            <?php if (isset($data['erreur']['title'])) : ?>
            <?= $data['erreur']['title'] ?>
            <?php endif; ?>

            <?php if (isset($data['erreur']['content'])) : ?>
            <?= $data['erreur']['content'] ?>
            <?php endif; ?>
          </div>

          <form action="/client/editNote/<?= $data['note'][0]['id'] ?>" method="post">
            <input type="text" name="title" value="<?php if (isset($data['note'][0]['title'])) {
     echo $data['note'][0]['title'];
 } ?>" placeholder="title">

            <input type="text" name="content" value="<?php if (isset($data['note'][0]['content'])) {
     echo $data['note'][0]['content'];
 } ?>" placeholder="content">

            <input type="hidden" name="id" value="<?= $data['note'][0]['id'] ?>" />
            <button class="button" type="input">Edit</button>
          </form>
          </form>
        </div>


      </div>

    </div>
  </div>
</div>

<?php include(ROOT . 'app/views/templates/footer.php');
