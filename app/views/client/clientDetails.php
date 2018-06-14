<?php
include(ROOT . 'app/views/templates/head.php');
if (isset($data['client'])) {
    foreach ($data['client'] as $client) {
        ?>

<p>Company name :
  <?= $client['company_name'] ?>
</p>
<p>Created by :
  <?= $client['created_by'] ?>
</p>
<p>Created at :
  <?= $client['created_at'] ?>
</p>
<p>Contact name :
  <?= $client['contact_name'] ?>
</p>
<p>Phone:
  <?= $client['phone'] ?>
</p>
<p>Fax:
  <?= $client['fax'] ?>
</p>
<p>Address:
  <?= $client['address'] ?>
</p>
<p>Mail:
  <?= $client['mail'] ?>
</p>

<?php
    }
}

include(ROOT . 'app/views/templates/footer.php');
