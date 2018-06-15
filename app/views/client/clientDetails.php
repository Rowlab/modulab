<?php
include(ROOT . 'app/views/templates/head.php');
if (isset($data['client'])) {
    ?>

<p>Company name :
  <?= $data['client'][0]['company_name'] ?>
</p>
<p>Created by :
  <?= $data['client'][0]['created_by'] ?>
</p>
<p>Created at :
  <?= $data['client'][0]['created_at'] ?>
</p>
<p>Contact name :
  <?= $data['client'][0]['contact_name'] ?>
</p>
<p>Phone:
  <?= $data['client'][0]['phone'] ?>
</p>
<p>Fax:
  <?= $data['client'][0]['fax'] ?>
</p>
<p>Address:
  <?= $data['client'][0]['address'] ?>
</p>
<p>Mail:
  <?= $data['client'][0]['mail'] ?>
</p>


<?php
} ?>

<a href="/client/addNote/<?= $data['client'][0]['id'] ?>">Add note</a>

<?php if (isset($data['notes'])) :?>

<?php foreach ($data['notes'] as $note) {
        ?>
<p>Titre :
  <?= $note['title'] ?>
</p>
<p>Contenu :
  <?= $note['content'] ?>
</p>

<a href="/client/deleteNote/<?= $note['id'] ?>" onClick="return confirm('Are you sure ?')">Remove</a>
<a href="/client/editNote/<?= $note['id'] ?>">Edit</a>

<?php
    } ?>

<?php endif; ?>

<?php include(ROOT . 'app/views/templates/footer.php');
