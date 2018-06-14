<?php include(ROOT . 'app/views/includes/header.php'); ?>

<div style="color: red;">
  <?php if (isset($data['erreur']['name'])) : ?>
  <?= $data['erreur']['name'] ?>
  <?php endif; ?>

  <?php if (isset($data['erreur']['surname'])) : ?>
  <?= $data['erreur']['surname'] ?>
  <?php endif; ?>

  <?php if (isset($data['erreur']['mail'])) : ?>
  <?= $data['erreur']['mail'] ?>
  <?php endif; ?>

  <?php if (isset($data['erreur']['password'])) : ?>
  <?= $data['erreur']['password'] ?>
  <?php endif; ?>
</div>

<form action="/user/editUser/<?= $data['user'][0]['id'] ?>" method="post" enctype="multipart/form-data">
  <input type="text" name="name" value="<?= $data['user'][0]['name']?>" placeholder="Name">

  <input type="text" name="surname" value="<?= $data['user'][0]['surname']?>" placeholder="Surname">

  <input type="text" name="mail" value="<?= $data['user'][0]['mail'] ?>" placeholder="Mail">

  <input type="text" name="password" placeholder="Password">

  <input type="text" name="address" value="<?php if (isset($data['userInfos'][0]['address'])) {
    echo $data['userInfos'][0]['address'];
} ?>" placeholder="Address">

  <input type="text" name="phone" value="<?php if (isset($data['userInfos'][0]['phone'])) {
    echo $data['userInfos'][0]['phone'];
} ?>" placeholder="Phone">

  <input type="text" name="fax" value="<?php if (isset($data['userInfos'][0]['fax'])) {
    echo $data['userInfos'][0]['fax'];
} ?>" placeholder="Fax">

  <input type="submit" value="Add">
</form>

<?php include(ROOT . 'app/views/includes/footer.php');
