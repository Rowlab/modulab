<?php
include(ROOT . 'app/views/templates/head.php');

if (isset($data['clients'])) {
    foreach ($data['clients'] as $client) {
        ?>
<a href="client/addClient">Add new client</a>
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

include(ROOT . 'app/views/templates/footer.php');
