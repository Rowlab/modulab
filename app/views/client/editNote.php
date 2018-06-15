<?php include(ROOT . 'app/views/templates/head.php'); ?>

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

  <input type="submit" value="Edit">
</form>

<?php include(ROOT . 'app/views/templates/footer.php');
