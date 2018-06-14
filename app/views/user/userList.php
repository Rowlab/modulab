<?php
include(ROOT . 'app/views/templates/head.php');
if ($data['users']) {
    foreach ($data['users'] as $user) {
        ?>

<div>
  <?php if ($user['role'] == 0) : ?>
  <b>SuperAdmin</b>
  <?php endif; ?>
  <p>Name :
    <?= $user['name'] ?>
  </p>
  <p>Surname :
    <?= $user['surname'] ?>
  </p>
  <p>Mail :
    <?= $user['mail'] ?>
  </p>

  <a href="/user/editUser/<?= $user['id'] ?>">Edit</a>
  <?php if ($user['active'] == 0) : ?>
  <a href="/user/enableUser/<?= $user['id'] ?>">Enable</a>
  <?php else : ?>
  <a href="/user/disableUser/<?= $user['id'] ?>">Disable</a>
  <?php endif; ?>

  <?php if ($_SESSION['infos'][0]['role'] == 0) : ?>
  <a href="/user/deleteUser/<?= $user['id'] ?>" onClick="return confirm('Are you sure ?')">Remove</a>
  <?php endif; ?>
  <br />
  <br />
</div>

<?php
    }
}

include(ROOT . 'app/views/templates/footer.php');
