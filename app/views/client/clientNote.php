<?php include(ROOT . 'app/views/templates/head.php');
?>
<div style="color: red;">
  <?php if (isset($data['erreur']['title'])) : ?>
  <?= $data['erreur']['title'] ?>
  <?php endif; ?>

  <?php if (isset($data['erreur']['content'])) : ?>
  <?= $data['erreur']['content'] ?>
  <?php endif; ?>
</div>

<form action="/client/addNote" method="post">
  <input type="text" name="title" value="<?php if (isset($_POST['title'])) {
    echo $_POST['title'];
} ?>" placeholder="Title">

  <input type="text" name="content" value="<?php if (isset($_POST['content'])) {
    echo $_POST['content'];
} ?>" placeholder="Content">

  <input type="hidden" name="id" value="<?= $data['id'] ?>" />
  <input type="submit" value="Add">
</form>


<?php include(ROOT . 'app/views/templates/footer.php');
